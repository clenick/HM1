<?php
header('Content-Type: application/json');
$codice = $_GET["letter"];
$conn = mysqli_connect("localhost","root","","progetto");
$query = "SELECT Nome, Immagine  FROM richiesta R join giocattolo G on R.giocattolo= G.codice  WHERE R.letterina= '$codice'";
$res = mysqli_query($conn, $query) or die(mysqli_error($conn));
$array = array();
while($letter = mysqli_fetch_assoc($res)){
    $array[] = array('Nome'=>$letter['Nome'], 'Immagine'=>$letter['Immagine']);
}
echo json_encode($array);
mysqli_close($conn);
exit();
?>