<?php
session_start();

header('Content-Type: application/json');
$codice = $_GET["letter"];
$conn = mysqli_connect("localhost","root","","progetto");
$query = "SELECT Testo,Immagine FROM letterina WHERE Codice= '$codice'";
$res = mysqli_query($conn, $query) or die(mysqli_error($conn));
$array = array();
while($letter = mysqli_fetch_assoc($res)){
    $array[] = array('Testo'=>$letter['Testo'],'Immagine' => $letter['Immagine']);
}
echo json_encode($array);
mysqli_close($conn);
exit();
?>