<?php session_start();
if ($_SESSION['autenticado'] != 'yeah') {
    header('Location: ../index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/tittle.ico"  >
    <script src="../js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="../css/sweet-alert.css">
    <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="../js/modernizr.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/main.js"></script>
	
	
	<!-- include alertify.css -->
<link rel="stylesheet" href="../alertas/build/css/alertify.css">

<!-- include boostrap theme  -->
<link rel="stylesheet" href="../alertas/build/css/themes/bootstrap.css">

<!-- include alertify script -->
<script src="../alertas/build/alertify.js"></script>

<script type="text/javascript">
//override defaults
alertify.defaults.transition = "slide";
alertify.defaults.theme.ok = "btn btn-primary";
alertify.defaults.theme.cancel = "btn btn-danger";
alertify.defaults.theme.input = "form-control";
</script>

	<script type="text/javascript" class="init"> 
	function Salir(){			
alertify.confirm("<center>ATENCI&Oacute;N!</center>", "<center><img src='../img/warning.png' width='250' height='250'></center>"+"<center><h1>Desea cerrar la sesión?</h1></center>", function(){ alertify.success('Ok') 

document.location.href="../config/fin.php";
}
                , function(){ alertify.error('No ha cerrado la sesión').dismissOthers()}).set('labels', {ok:'si', cancel:'no'}).set({transition:'zoom'});; 

		}
	
	</script>
	
<style>
#ayuda .modal-body {max-height: 1200px;}
	</style>	
	
	
	<script>
	
function ayuda(){
	  $(document).ready(function () {
	$("#ayuda").modal();
	  });
}
	
	</script>
	
</head>
<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo full-reset all-tittles" style="background-color:#0095FF;" >
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style=" line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                sistema cdi
            </div>
            <div class="full-reset" style="background-color:#105391; padding: 10px 0; color:#fff;">
                <figure>
                    <img src="../img/sin.png" alt="CDI" class="img-responsive center-box" style="width:55%;">
                </figure>
       
            </div>
            <div class="full-reset nav-lateral-list-menu"> <?php include '.../menu.php'; ?> </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers" >
	
	  
	
	
        <nav class="navbar-user-top full-reset" >
		
	 
		
		
            <ul class="list-unstyled full-reset" >
                
              
            
				 <li   onClick="Salir()" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
				
				  <li onClick="ayuda()" class="tooltips-general btn-help" data-placement="bottom" title="Ayuda" >
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw" data-target="#ayuda"></i> 
                </li>
				
				<figure>
				
				
            <!--       <img src="../assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box"> --> 
			<!--aqui va la foto del usuario -->
                
				
				<?php

                if (isset($_SESSION)) {
                    $sexo = $_SESSION['sexoT'];
                    $man = '../assets/img/user01.png';
                    $woman = '../assets/img/userWoman.png';
                    $user = 'user-picture';
                    $class = 'img-responsive img-circle center-box';
                    $style = 'max-width: 110px;';
                    if (isset($_SESSION)) {
                        if ($sexo == 'masculino') {
                            //echo "<img src="../assets/img/user01.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">";
                            echo '<img src="'.$man.'" alt="'.$user.'" class="'.$class.'" >';
                        } else {
                            if ($sexo == 'femenino') {
                                echo '<img src="'.$woman.'" alt="'.$user.'" class="'.$class.'" >';
                            }
                        }
                    }
                }
?>		             
				
				
				
				</figure>
                <li style="color:#fff; cursor:default;" title="Datos personales">
				<a href="datosPersonales.php"  style="color:#ffffff;">
                    <span class="all-tittles"><?php  if (isset($_SESSION)) {
    $usu = $_SESSION['usuarioT'];
    $usu = base64_decode($usu);
    echo "$usu";
}

                    ?>
					
					</span>
	</a>               
			   </li>
				
				
				
               
               
			

    <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
			
            </ul>
        </nav>
		
		 
    	
<div id="ayuda" data-backdrop="static" class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ayuda Modulo Inicio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal-lg">	
	     <div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel" >

  

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     <img class="img-responsive" src="https://i.ytimg.com/vi/M3FSE6i1328/maxresdefault.jpg" alt="...">
      <div class="carousel-caption">
	  <br>
	  <br>
        <p style="color:black";><br><br><br><br>Red paragraph text</p>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Google_Images_2015_logo.svg/1200px-Google_Images_2015_logo.svg.png" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
     <div class="item">
      <img class="img-responsive" src="https://lh3.googleusercontent.com/7TJ0my7uQOXcn8b7wRvfOEcYf5SzcivSFCeErPFGMoTm8zsQG78PDxLtP-KeH7IKV4M=w300" alt="...">
      <div class="carousel-caption">
       
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
	   
       </div>
     
    </div>
  </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
	   
	   
        <footer class="footer full-reset">
           <div class="footer-copyright full-reset all-tittles"><img src="../img/minerva.png" width ="45" height="45"/>Derechos Reservados UES-FMP 2017</div>
		   
        </footer>
    </div>
	
</body>
</html>|