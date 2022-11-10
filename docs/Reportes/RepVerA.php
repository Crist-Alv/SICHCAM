<?php session_start();
$t=$_SESSION["nivelUsuario"];
$iddatos=$_SESSION["idUsuario"];
if ($_SESSION['autenticado'] != "yeah" || $t != 1) {
    header("Location: ../../index.php");
    exit();
}



include('../../config/conexion.php');
require('../../fpdf/fpdf.php');

class pdf extends FPDF{
    public function header(){

    }

    public function footer(){
        $this-> SetFont('Arial', 'B', 10);
        $this->SetY(-15);
        $this->SetX(-15);
        $this->Write(5, $this->PageNo());
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_GET['rid'];

$query_s = pg_query($conexion, "SELECT alumnos.*, inscripcion.* from alumnos INNER JOIN inscripcion ON inscripcion.idalum = alumnos.idalum where alumnos.idalum=$id");
while ($fila = pg_fetch_array($query_s)) {

$fpdf = new pdf('P', 'mm', 'letter', true);
$fpdf-> AddPage('PORTRAIT', 'letter');
$fpdf-> SetFont('Arial', '', 12);
$fpdf-> SetTextColor(25,174,194);

$fpdf-> image('../../images/logo.png', 5, 5, 25, '','png', '../alumno.php');
$fpdf-> image('../../images/min-edu.png', 180, 10, 35);
$fpdf-> SetFont('Arial', 'B', 12);
$fpdf-> Cell(0,7, 'SICACECSJ - Información General del Alumno' ,0 ,0, 'C');
$fpdf->Ln();
$fpdf-> Cell(0,7, 'CONTROL ACADÉMICO DEL CENTRO ESCOLAR CATÓLICO SAN JOSÉ' ,0 ,0, 'C');
$fpdf->Ln();
$fpdf-> Cell(0,7, 'Verapaz, San Vicente' ,0 ,0, 'C');
$fpdf->Ln(20);
$fpdf-> SetFont('Arial', '', 12);

$path = "../../images/foto_estudiantes/" . $fila[59];
if (file_exists($path)) {
    $directorio = opendir($path);
    while ($archivo = readdir($directorio)) {
        if (!is_dir($archivo)) {
            $fpdf-> image('../../images/foto_estudiantes/'.$fila[59].'/'.$archivo, 10, 45, 30);
        }
    }
}

$fpdf->Ln(10);
$fpdf->SetX(50);
$fpdf-> SetTextColor(0,0,0);
$fpdf->SetLineWidth(0.5);
$fpdf-> Cell(15,15,'Carnet:');
$fpdf-> Cell(28,15, $fila[59]);
$fpdf->Line(65, 64, 88, 64);

$fpdf-> Cell(17,15,'Nombre:');
$fpdf-> Cell(45,15,$fila[1]);
$fpdf->Line(150, 64, 110, 64);

$fpdf-> Cell(17,15,'Apellido:');
$fpdf-> Cell(30,15,$fila[2]);
$fpdf->Line(210, 64, 172, 64);

$fpdf->Ln();
$fpdf->SetX(50);

$fpdf-> Cell(42,15,'Fecha de Nacimiento:');
$fpdf-> Cell(28,15, dameFecha($fila[9]));
$fpdf->Line(118, 79, 93, 79);

$fpdf-> Cell(16,15,'Género:');
$fpdf-> Cell(22,15,$fila[8]);
$fpdf->Line(158, 79, 138, 79);

$fpdf-> Cell(26,15,'Nacionalidad:');
$fpdf-> Cell(0,15,$fila[3]);
$fpdf->Line(213, 79, 186, 79);

$fpdf->Ln();
$fpdf->SetX(50);
$fpdf-> Cell(41,15,'Lugar de Nacimiento:');
$fpdf-> Cell(30,15,$fila[11]);
$fpdf->Line(118, 94, 92, 94);

$fpdf-> Cell(24,15,'Estado civil:');
$fpdf-> Cell(30,15,$fila[13]);
$fpdf->Line(162, 94, 145, 94);
$fpdf->Ln(25);

$fpdf->SetX(5);
$fpdf-> SetFont('Arial', 'B', 12);
$fpdf-> Write(0, 'Datos de Contanto');
$fpdf->Line(200, 112, 5, 112);
$fpdf->Ln(5);
$fpdf-> SetFont('Arial', '', 12);

$fpdf-> Cell(29,10,'Departamento:');
$result_DV = pg_query($conexion, "SELECT iddep, departamento from departamento where iddep=$fila[4]"); 
            while ($rowD = pg_fetch_array($result_DV)) {                                                                                                            
                $fpdf-> Cell(35,10,$rowD['departamento']);                                         
            }
$fpdf->Line(70, 121, 40, 121);

$fpdf-> Cell(12,10,'Zona:');
$fpdf-> Cell(22,10,$fila[15]);
$fpdf->Line(105, 121, 86, 121);

$fpdf-> Cell(19,10,'Municipio:');
$result_MV = pg_query($conexion, "SELECT * from municipio where idmunicipio=$fila[5]"); 
            while ($rowM = pg_fetch_array($result_MV)) {                                                                     
                    $fpdf-> Cell(30,10,$rowM['municipio']);                                        
            }
$fpdf->Line(154, 121, 129, 121);
$fpdf->Ln();

$fpdf-> Cell(20,10,'Dirección:');
$fpdf-> Cell(85,10,$fila[6]);
$fpdf->Line(110, 131, 30, 131);

$fpdf-> Cell(27,10,'Tipo de Calle:');
$fpdf-> Cell(27,10,$fila[14]);
$fpdf->Line(165, 131, 142, 131);

$fpdf-> Cell(18,10,'Teléfono:');
$fpdf-> Cell(22,10,$fila[10]);
$fpdf->Line(210, 131, 188, 131);
$fpdf->Ln();

$fpdf-> Cell(12,10,'Email:');
$fpdf-> Cell(22,10,$fila[7]);
$fpdf->Line(68, 141, 23, 141);
$fpdf->Ln(25);

$fpdf->SetX(5);
$fpdf-> SetFont('Arial', 'B', 12);
$fpdf-> Write(0, 'Otros Datos');
$fpdf->Line(200, 162, 5, 162);
$fpdf->Ln(5);
$fpdf-> SetFont('Arial', '', 12);

$fpdf-> Cell(41,10,'Medio de Transporte:');
$fpdf-> Cell(28,10,$fila[16]);
$fpdf->Line(75, 171, 52, 171);

$fpdf-> Cell(32,10,'Distancia al C.E:');
$fpdf-> Cell(15,10,$fila[17]);

$fpdf-> Cell(26,10,'Factor riesgo:');
$fpdf-> Cell(22,10,$fila[18]);
$fpdf->Ln();

$fpdf-> Cell(16,10,'Trabaja:');
$fpdf-> Cell(10,10, $fila[19]);

$fpdf-> Cell(49,10,'Dependencia Económica:');
$fpdf-> Cell(22,10,$fila[20]);
$fpdf->Ln(20);

$fpdf->SetX(5);
$fpdf-> SetFont('Arial', 'B', 12);
$fpdf-> Write(0, 'Datos de Salud');
$fpdf->Line(200, 186, 5, 186);
$fpdf->Ln(5);
$fpdf-> SetFont('Arial', '', 12);

$fpdf-> Cell(57,10, 'Presenta Tarjeta de Vacunas:');
$fpdf-> Cell(10,10, $fila[21]);

$fpdf-> Cell(62,10, 'Esquema de Vacunas Completo:');
$fpdf-> Cell(10,10, $fila[22]);

$fpdf-> Cell(55,10, 'Discapacidad o Enfermedad:');
$fpdf-> Cell(15,10, $fila[23]);
                                        
$fpdf-> Cell(22,10, 'Tiene alguna Prescripción Médica');
$fpdf-> Cell(22,10,  $fila[24]);

$fpdf->AddPage();
$fpdf->SetX(5);
$fpdf-> SetFont('Arial', 'B', 12);
$fpdf-> Write(0, 'Datos del Padre de Familia');
$fpdf->Line(200, 141, 5, 141);
$fpdf->Ln(5);
$fpdf-> SetFont('Arial', '', 12);

$fpdf-> Cell(15,10, 'N° DUI:');
$fpdf-> Cell(22,10, $fila[39]);

$fpdf-> Cell(15,10, 'N° NIT:');
$fpdf-> Cell(40,10, $fila[40]); 

$fpdf-> Cell(19,10, 'Nombres:');
$fpdf-> Cell(38,10, $fila[25]); 

$fpdf-> Cell(19,10, 'Apellidos:');
$fpdf-> Cell(22,10, $fila[26]);
$fpdf->Ln();

$fpdf-> Cell(42,10, 'Fecha de Nacimiento:');
$fpdf-> Cell(25,10, dameFecha($fila[38]));

$fpdf-> Cell(26,10, 'Nacionalidad:'); 
$fpdf-> Cell(26,10,  $fila[27]);

$fpdf-> Cell(41,10, 'Lugar de Nacimiento:');
$fpdf-> Cell(22,10, $fila[29]);
$fpdf->Ln();

$fpdf-> Cell(43,10, 'Depto. de Nacimiento:');                                        
$result_DV = pg_query($conexion, "SELECT iddep, departamento from departamento where iddep=$fila[28]"); 
                while ($rowD = pg_fetch_array($result_DV)) {                                                                  
                    $fpdf-> Cell(25,10, $rowD['departamento']);
                }
                                        
$fpdf-> Cell(12,10, 'Zona:');
$fpdf-> Cell(16,10, $fila[41]);

$fpdf-> Cell(22,10, 'Género:');
$fpdf-> Cell(22,10, $fila[30]);

$fpdf-> Cell(31,10, 'Estado Familiar:');
$fpdf-> Cell(22,10, $fila[31]);
$fpdf->Ln();                                    

$fpdf-> Cell(22,10, 'Grado de Estudio:');
$fpdf-> Cell(22,10, $fila[32]);

$fpdf-> Cell(22,10, 'Profesión'); 
$fpdf-> Cell(22,10, $fila[33]);


$fpdf-> Cell(22,10, 'Dirección'); 
$fpdf-> Cell(22,10, $fila[34]);

$fpdf-> Cell(22,10, 'Lugar de Trabajo');
$fpdf-> Cell(22,10, $fila[37]);

$fpdf-> Cell(22,10, 'Teléfono');
$fpdf-> Cell(22,10, $fila[35]); 

$fpdf-> Cell(22,10, 'Email');
$fpdf-> Cell(22,10, $fila[36]); 
$fpdf->Ln(20);

$fpdf->SetX(5);
$fpdf-> SetFont('Arial', 'B', 12);
$fpdf-> Write(0, 'Datos de la Madre de Familia');
$fpdf->Line(200, 141, 5, 141);
$fpdf->Ln(5);
$fpdf-> SetFont('Arial', '', 12);

$fpdf-> Cell(22,10, 'N° DUI');
$fpdf-> Cell(22,10, $fila[42]);

$fpdf-> Cell(22,10, 'N° NIT');
$fpdf-> Cell(22,10, $fila[43]); 

$fpdf-> Cell(22,10, 'Nombres');
$fpdf-> Cell(22,10, $fila[44]); 

$fpdf-> Cell(22,10, 'Apellidos');
$fpdf-> Cell(22,10, $fila[45]);

$fpdf-> Cell(22,10, 'Fecha de Nacimiento');
$fpdf-> Cell(22,10, dameFecha($fila[46]));

$fpdf-> Cell(22,10, 'Nacionalidad'); 
$fpdf-> Cell(22,10,  $fila[47]);

$fpdf-> Cell(22,10, 'Lugar de Nacimiento');
$fpdf-> Cell(22,10, $fila[48]);

$fpdf-> Cell(22,10, 'Depto. de Nacimiento');                                        
$result_DV = pg_query($conexion, "SELECT iddep, departamento from departamento where iddep=$fila[49]"); 
                while ($rowD = pg_fetch_array($result_DV)) {                                                                  
                    $fpdf-> Cell(22,10, $rowD['departamento']);
                }
                                        
$fpdf-> Cell(22,10, 'Zona');
$fpdf-> Cell(22,10, $fila[50]);

$fpdf-> Cell(22,10, 'Género');
$fpdf-> Cell(22,10, $fila[51]);

$fpdf-> Cell(22,10, 'Estado Familiar');
$fpdf-> Cell(22,10, $fila[52]);
                                      
$fpdf-> Cell(22,10, 'Grado de Estudio');
$fpdf-> Cell(22,10, $fila[53]);

$fpdf-> Cell(22,10, 'Profesión'); 
$fpdf-> Cell(22,10, $fila[54]); 

$fpdf-> Cell(22,10, 'Dirección'); 
$fpdf-> Cell(22,10, $fila[55]);

$fpdf-> Cell(22,10, 'Lugar de Trabajo');
$fpdf-> Cell(22,10, $fila[58]);

$fpdf-> Cell(22,10, 'Teléfono');
$fpdf-> Cell(22,10, $fila[56]); 

$fpdf-> Cell(22,10, 'Email');
$fpdf-> Cell(22,10, $fila[57]);
$fpdf->Ln(20); 

$fpdf->SetX(5);
$fpdf-> SetFont('Arial', 'B', 12);
$fpdf-> Write(0, 'Datos de Inscripción');
$fpdf->Line(200, 141, 5, 141);
$fpdf->Ln(5);
$fpdf-> SetFont('Arial', '', 12);

$fpdf-> Cell(22,10, 'Fecha de Ingreso');
$fpdf-> Cell(22,10, dameFecha($fila[61]));

$fpdf-> Cell(22,10, 'Codigo de Infraestructura');
$fpdf-> Cell(22,10, $fila[62]);

$fpdf-> Cell(22,10, 'Ciclo');
$fpdf-> Cell(22,10, $fila[63]);

$fpdf-> Cell(22,10, 'Grado');
$fpdf-> Cell(22,10, $fila[65]);

$fpdf-> Cell(22,10, 'Año Lectivo');
$fpdf-> Cell(22,10, $fila[64]);

$fpdf-> Cell(22,10, 'Sección');
$fpdf-> Cell(22,10, $fila[66]);

$fpdf-> Cell(22,10, 'Turno');
$fpdf-> Cell(22,10, $fila[67]);
$fpdf->Ln(20);

$fpdf->SetX(5);
$fpdf-> SetFont('Arial', 'B', 12);
$fpdf-> Write(0, 'Datos del Responsable');
$fpdf->Line(200, 141, 5, 141);
$fpdf->Ln(5);
$fpdf-> SetFont('Arial', '', 12);

$fpdf-> Cell(22,10, 'N° DUI');
$fpdf-> Cell(22,10, $fila[68]);

$fpdf-> Cell(22,10, 'N° NIT');
$fpdf-> Cell(22,10, $fila[69]);

$fpdf-> Cell(22,10, 'Nombre del Responsable');
$fpdf-> Cell(22,10, $fila[70]);

$fpdf-> Cell(22,10, 'Apellidos');
$fpdf-> Cell(22,10, $fila[71]);

$fpdf-> Cell(22,10, 'Teléfono');
$fpdf-> Cell(22,10,  $fila[72]);

$fpdf-> Cell(22,10, 'Dirección');
$fpdf-> Cell(22,10, $fila[73]);


$fpdf-> OutPut('', 'Datos del Alumno '.$fila[1]. '.pdf');

   }
}

function dameFecha($fecha){
	list($year,$mon,$day)=explode('-',$fecha);
	return date('d-m-Y',mktime(0,0,0,$mon,$day,$year));
	}
?>