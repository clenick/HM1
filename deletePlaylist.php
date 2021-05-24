<?php
       $conn = mysqli_connect("localhost","root","","progetto");
       $id=$_GET["playlist"];
       $query = "DELETE FROM playlist WHERE Id_numerico='$id'";
       $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
       mysqli_close($conn);
       exit();
?>