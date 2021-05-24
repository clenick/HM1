<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: signin.php");
    exit();
}  
header('Content-Type: application/json');
$bambino = $_SESSION["user"];
$conn = mysqli_connect("localhost","root","","progetto");
$query = "SELECT Nome,Id_numerico,Num_canzoni FROM playlist WHERE bambino='$bambino'";
$res = mysqli_query($conn, $query) or die(mysqli_error($conn));
$array = array();
while($playlist = mysqli_fetch_assoc($res)){
    $array[] = array('Id_numerico' => $playlist['Id_numerico'],'Nome' => $playlist['Nome'],'Num_canzoni'=> $playlist['Num_canzoni']);
}

echo json_encode($array);
mysqli_close($conn);
exit();
?>