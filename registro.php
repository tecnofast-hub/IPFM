<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tu_base";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$identidad = $_POST["identidad"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$telefono = $_POST["telefono"];
$sexo = $_POST["sexo"];
$padre_nombre = $_POST["padre_nombre"];
$padre_apellido = $_POST["padre_apellido"];
$padre_edad = $_POST["padre_edad"];
$padre_profesion = $_POST["padre_profesion"];
$padre_telefono = $_POST["padre_telefono"];
$padre_identidad = $_POST["padre_identidad"];
$madre_nombre = $_POST["madre_nombre"];
$madre_apellido = $_POST["madre_apellido"];
$madre_edad = $_POST["madre_edad"];
$madre_profesion = $_POST["madre_profesion"];
$madre_telefono = $_POST["madre_telefono"];
$madre_identidad = $_POST["madre_identidad"];
$jornada = $_POST["jornada"];
$seccion = $_POST["seccion"];
$carrera = $_POST["carrera"];
$jornada_ciclo = $_POST["jornada_ciclo"];
$seccion_ciclo = $_POST["seccion_ciclo"];
$ciclo = $_POST["ciclo"];


$sql = "INSERT INTO registros(nombre, apellido, edad, identidad, fecha_nacimiento, telefono, sexo,padre_nombre,padre_apellido,padre_edad,padre_profesion,padre_telefono,padre_identidad,madre_nombre,madre_apellido,madre_edad,madre_profesion,madre_telefono,madre_identidad,jornada,seccion,carrera,jornada_ciclo,seccion_ciclo,ciclo) 

VALUES ('$nombre', '$apellido', '$edad', '$identidad', '$fecha_nacimiento', '$telefono', '$sexo', '$padre_nombre', '$padre_apellido', '$padre_edad', '$padre_profesion', '$padre_telefono', '$padre_identidad', '$madre_nombre', '$madre_apellido', '$madre_edad', '$madre_profesion', '$madre_telefono', '$madre_identidad', '$jornada', '$seccion', '$carrera','$jornada_ciclo','$seccion_ciclo','$ciclo')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>