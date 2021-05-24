<?php
       session_start();
       if(!isset($_SESSION["user"])){
           header("Location: signin.php");
           exit();
       }   
       $conn = mysqli_connect("localhost","root","","progetto");
       $title=$_GET["title"];
       $link=$_GET["link"];
       $artist=$_GET["artist"];
       $playlist=$_GET["playlist"];
       $query = "INSERT INTO canzone VALUES ('','$artist', '$title','$link','$playlist')";
       $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
       mysqli_close($conn);
       exit();
?>