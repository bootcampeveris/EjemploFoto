<?php

$cadenaFoto=$_FILES['miArchivo']['name'];

$conexion=mysqli_connect("localhost","u155163932_login","contraseña","u155163932_login") or
    die("Problemas con la conexión");
mysqli_query($conexion,"insert into foto (cadena) values ('$cadenaFoto')");
if (isset($_FILES['miArchivo'])) {
    //http://php.net/manual/es/function.move-uploaded-file.php
    //Nombre del archivo subido, ruta del archivo subido
    move_uploaded_file($_FILES['miArchivo']['tmp_name'], "subidas/" . $_FILES['miArchivo']['name']);
    echo 'Subido correctamente';
}
?>