<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: signin.php");
    exit();
}  
header('Content-Type: application/json');

$playlist= $_GET["playlist"];
$conn = mysqli_connect("localhost","root","","progetto");
$query = "SELECT codice,titolo,artista,url FROM canzone WHERE playlist='$playlist'";
$res = mysqli_query($conn, $query) or die(mysqli_error($conn));
$array = array();
while($canzone = mysqli_fetch_assoc($res)){
    $array[] = array('codice' => $canzone['codice'],'titolo' => $canzone['titolo'],'artista' => $canzone['artista'],'url' => $canzone['url']);
}

echo json_encode($array);
mysqli_close($conn);
exit();
?>