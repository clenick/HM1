<?php
       session_start();
       if(!isset($_SESSION["user"])){
           header("Location: signin.php");
           exit();
       }   
       $conn = mysqli_connect("localhost","root","","progetto");
       $title=urlencode($_GET["title"]);
       //$title = $id = mysqli_real_escape_string($conn,["title"]);
       $id = mysqli_real_escape_string($conn,$_SESSION["user"]);
       $query = "INSERT INTO playlist VALUES ('','$id', '$title','0')";
       $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
       mysqli_close($conn);
       exit();
?>