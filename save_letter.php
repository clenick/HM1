<?php
session_start();
if (!isset($_SESSION["user"])){
   header("Location: signin.php");
   exit();
   
}

$bambino = $_SESSION["user"];
$anno= date("Y");
$immagine= $_GET["image"];
$messaggio= $_GET["message"];
$conn = mysqli_connect("localhost","root","","progetto" ) or die(mysqli_error($conn));
$query = "INSERT INTO letterina VALUES ('','$bambino','$anno' ,'$messaggio','$immagine')";
mysqli_query($conn, $query) or die (mysqli_error($conn));   
    

mysqli_close($conn);
?>