<?php
       $conn = mysqli_connect("localhost","root","","progetto");
       $codice=urlencode($_GET["playlist"]);
       $query = "DELETE FROM canzone WHERE playlist='$codice'";
       $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
       mysqli_close($conn);
       exit();
?>