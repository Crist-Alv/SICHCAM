<?php
 function restablecer(){  
   //Tragen Sie hier Ihre Datenbankinformationen ein und den Namen der Backup-Datei
$mysqlDatabaseName ='cam_cedros';
$mysqlUserName ='root';
$mysqlPassword ='';
$mysqlHostName ='localhost';

$filename = $_FILES['path']['name'];
$mysqlImportFilename =$filename.'.sql';

//Por favor, no haga ningún cambio en los siguientes puntos
//Importación de la base de datos y salida del status
$command='mysql -h' .$mysqlHostName .' -u' .$mysqlUserName .' --password="' .$mysqlPassword .'" ' .$mysqlDatabaseName .' < ' .$mysqlImportFilename;
exec($command,$output,$worked);

return $worked;
 }
 restablecer();
?>