<?php
require('../../fpdf/fpdf.php');
date_default_timezone_set('America/El_Salvador');
// Creación del objeto de la clase heredada
//
class PDF extends FPDF
{

function Header()
{
    // Logo 
    $this->Image('../../images/logo.png',25,10,33);
    // Arial bold 15
    //                      tipo/tamanio
    $this->SetFont('helvetica', 'B', 13);
    // Movernos a la derecha
    $this->Cell(80);

  $this->SetTextColor(30,30,32);
  $this->Text(96, 15, 'CUERPO DE AGENTES MUNICIPALES - (CAM)');
  $this->Text(92, 20, 'ALCALDIA MUNICIPAL DE SAN RAFAEL CEDROS');
  
  
  /* --- Line --- */

   $this->SetLineWidth(8); //antes de dibujar la linea
    $this->setDrawColor(24,68,104);
    $this->Line(0, 0, 500, 0);
    // Salto de línea
     $this->Ln(20);
}

// Pie de página
function Footer()
{
        $this->SetY(-20);
        $this->SetFont('Arial','B',8);
        $this->Cell(185,5,utf8_decode('Página ').$this->PageNo().' / {nb}',0,0,'L');
        $this->Cell(95,5,date('d/m/Y g:i a') ,00,1,'R');
        $this->Line(10,287,200,287);
        $this->Cell(0,5,utf8_decode("Facultad Multidisciplinaria Paracentral - Universidad de El Salvador. © Todos los derechos reservados."),0,0,"C");
        
}

var $widths;
var $aligns;

function SetWidths($w)
{
    //Set the array of column widths
    $this->widths=$w;
}

function SetAligns($a)
{
    //Set the array of column alignments
    $this->aligns=$a;
}

function Row($data)
{
    //Calculate the height of the row
    $nb=0;
    for($i=0;$i<count($data);$i++)
        $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
    $h=5*$nb;
    //Issue a page break first if needed
    $this->CheckPageBreak($h);
    //Draw the cells of the row
    for($i=0;$i<count($data);$i++)
    {
        $w=$this->widths[$i];
        $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'C';
        //Save the current position
        $x=$this->GetX();
        $y=$this->GetY();
        //Draw the border
        $this->Rect($x,$y,$w,$h,'FD');
        //Print the text
        $this->MultiCell($w,5,$data[$i],0,$a,1);
        //Put the position to the right of the cell
        $this->SetXY($x+$w,$y);
    }
    //Go to the next line
    $this->Ln($h);
}

function CheckPageBreak($h)
{
    //If the height h would cause an overflow, add a new page immediately
    if($this->GetY()+$h>$this->PageBreakTrigger)
        $this->AddPage($this->CurOrientation);
        $this->setX(30);
}

function NbLines($w,$txt)
{
    //Computes the number of lines a MultiCell of width w will take
    $cw=&$this->CurrentFont['cw'];
    if($w==0)
        $w=$this->w-$this->rMargin-$this->x;
    $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
    $s=str_replace("\r",'',$txt);
    $nb=strlen($s);
    if($nb>0 and $s[$nb-1]=="\n")
        $nb--;
    $sep=-1;
    $i=0;
    $j=0;
    $l=0;
    $nl=1;
    while($i<$nb)
    {
        $c=$s[$i];
        if($c=="\n")
        {
            $i++;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
            continue;
        }
        if($c==' ')
            $sep=$i;
        $l+=$cw[$c];
        if($l>$wmax)
        {
            if($sep==-1)
            {
                if($i==$j)
                    $i++;
            }
            else
                $i=$sep+1;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
        }
        else
            $i++;
    }
    return $nl;
}

 //***** Aquí comienza código para ajustar texto *************
    //***********************************************************
    function CellFit($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $scale=false, $force=true)
    {
        //Get string width
        $str_width=$this->GetStringWidth($txt);
 
        //Calculate ratio to fit cell
        if($w==0)
            $w = $this->w-$this->rMargin-$this->x;
        $ratio = ($w-$this->cMargin*2)/$str_width;
 
        $fit = ($ratio < 1 || ($ratio > 1 && $force));
        if ($fit)
        {
            if ($scale)
            {
                //Calculate horizontal scaling
                $horiz_scale=$ratio*100.0;
                //Set horizontal scaling
                $this->_out(sprintf('BT %.2F Tz ET',$horiz_scale));
            }
            else
            {
                //Calculate character spacing in points
                $char_space=($w-$this->cMargin*2-$str_width)/max($this->MBGetStringLength($txt)-1,1)*$this->k;
                //Set character spacing
                $this->_out(sprintf('BT %.2F Tc ET',$char_space));
            }
            //Override user alignment (since text will fill up cell)
            $align='';
        }
 
        //Pass on to Cell method
        $this->Cell($w,$h,$txt,$border,$ln,$align,$fill,$link);
 
        //Reset character spacing/horizontal scaling
        if ($fit)
            $this->_out('BT '.($scale ? '100 Tz' : '0 Tc').' ET');
    }
 
    function CellFitSpace($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        $this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,false,false);
    }
 
    //Patch to also work with CJK double-byte text
    function MBGetStringLength($s)
    {
        if($this->CurrentFont['type']=='Type0')
        {
            $len = 0;
            $nbbytes = strlen($s);
            for ($i = 0; $i < $nbbytes; $i++)
            {
                if (ord($s[$i])<128)
                    $len++;
                else
                {
                    $len++;
                    $i++;
                }
            }
            return $len;
        }
        else
            return strlen($s);
    }
}
//------------------------------------------------------------------------------------------------
include_once '../../Config/conexion.php';
$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Ln();

/*-------TITULOS Y ENCABEZADOS -----------*/
$pdf->Ln(20);
$pdf->SetFont('Arial','B',12);
$pdf->Text(128, 50, 'Tabla de Horarios');
$pdf->Ln(5);
/* --- Tabla --- */

$pdf->SetX(30);
$pdf->SetFont('', 'B', 11);
$pdf->Cell(40, 8, 'Fecha Asignada', 0, 0, 'C', 0);
$pdf->Cell(35, 8, utf8_decode('Zona Asignada'), 0, 0, 'C', 0);
$pdf->Cell(65, 8, 'Agente Asignado/a', 0, 0, 'C', 0);
$pdf->Cell(35, 8, 'Arma Asignada', 0, 0, 'C', 0);
$pdf->Cell(32, 8, utf8_decode('Hora de Entrada'), 0, 0, 'C', 0);
$pdf->Cell(30, 8, 'Hora de Salida', 0, 1, 'C', 0);
/* --- DIVISION --- */
$pdf->setDrawColor(24,68,104);
$pdf->Line(30, 62, 265, 62);
$pdf->SetFillColor(240,240,240);
$pdf->SetDrawColor(255,255,255);
/* --- Tabla --- */

$pdf->SetFont('Arial','',10);
$pdf->SetWidths(array(40,35,65,35,30,30));
$query_s = mysqli_query($conexion,"SELECT * FROM horario where fecha_horario = DATE(NOW()) ORDER BY agenteh ASC");
while($array= mysqli_fetch_array($query_s)){
$pdf->SetX(10);
$pdf->Row(array(utf8_decode($array['dia'] .' - '. date("d/m/Y", strtotime($array['fecha_horario']))), utf8_decode($array['zonah']), utf8_decode($array['agenteh']), utf8_decode($array['armah']), utf8_decode($array['hora_entrada']), utf8_decode($array['hora_salida'])));
}

$pdf->Output();
?>