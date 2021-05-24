<?php
session_start();
if (!isset($_SESSION["user"])){
    header("Location: signin.php");
    exit();
    
}
header('Content-Type: application/json');
$bambino = $_SESSION["user"];
$anno= date("Y");
$conn = mysqli_connect("localhost","root","","progetto");
$query = "SELECT Codice FROM letterina WHERE bambino= '$bambino' and anno= '$anno'";
$res = mysqli_query($conn, $query) or die(mysqli_error($conn));
$array = array();
while($id = mysqli_fetch_assoc($res)){
    $array[] = array('Id' => $id['Codice']);
}
echo json_encode($array);
mysqli_close($conn);
exit();
?>