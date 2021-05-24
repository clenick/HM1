<?php
       session_start();
       $conn = mysqli_connect("localhost","root","","progetto");
       $letterina=$_GET["letter"];
       $giocattolo=$_GET["toy"];
       $query = "INSERT INTO richiesta VALUES ('','$giocattolo', '$letterina')";
       $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
       mysqli_close($conn);
       exit();
?>