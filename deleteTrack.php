<?php
       $conn = mysqli_connect("localhost","root","","progetto");
       $codice=urlencode($_GET["codice"]);
       $query = "DELETE FROM canzone WHERE codice='$codice'";
       $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
       mysqli_close($conn);
       exit();
?>