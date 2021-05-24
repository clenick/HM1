<?php
session_start();
if (!isset($_SESSION["user"])){
    header("Location: signin.php");
    exit();
    
}
header('Content-Type: application/json');
$bambino = $_SESSION["user"];
$conn = mysqli_connect("localhost","root","","progetto");
$query = "SELECT Codice,Anno FROM letterina WHERE bambino= '$bambino'";
$res = mysqli_query($conn, $query) or die(mysqli_error($conn));
$array = array();
while($letter = mysqli_fetch_assoc($res)){
    $array[] = array('Codice'=>$letter['Codice'],'Anno' => $letter['Anno']);
}
echo json_encode($array);
mysqli_close($conn);
exit();
?>