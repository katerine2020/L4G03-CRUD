<?php
include("include/db.php");
if($con->connect_error){
    echo "| Error de conexion |";
}else{
    echo "| Conectado a la BSD |<br>";
}
//Tomar, recuperar datos
$nombre=$_POST["nombre"];
$email=$_POST["email"];
//echo "Informacion enviada:<br>Nombre:$nombre <br>Email:$email ";
$sql="insert into personas(nombre,email) values('$nombre','$email')";
DB::query($sql);
/*if($con->query($query)){//$con->query($query)==true
    echo "Persona Guardada";
}else{
    echo "No se ha podido guardar:<br>".$con->error;
}
*/
header('location: index.php');
?>

