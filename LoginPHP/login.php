<?php
//conexion BD
$dbhost ="localhost";
$dbuser ="root";
$dbpass ="";
$dbname="prueba";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn)
{
    die("no hay conexion: ".mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

//se busca een la bd si el usuario existe 
$query = mysqli_query($conn,"SELECT * FROM usuario WHERE username = '".$nombre."' and  userpassword ='".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    //header("Location:pagina.html")
    echo "Bienvenido: " .$nombre;
    echo " Autenticación satisfactoria";
}
else if ( $nr == 0)
{
    echo "No ingreso, error en la autenticación";
}


?>