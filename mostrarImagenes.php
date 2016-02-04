<?php
$conexion=mysqli_connect("localhost","u155163932_login","contraseña","u155163932_login") or
    die("Problemas con la conexión");
$registros=mysqli_query($conexion,"select * from foto");

while($reg=mysqli_fetch_array($registros)){

echo'<img src=../foto/subidas/"'.$reg['cadena'].'" width="300px" height="300px"/>';
    
}
?>