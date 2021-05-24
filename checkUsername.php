<?php
    header('Content-Type: application/json');
    if (!isset($_GET["q"])) {
        echo "Non dovresti essere qui";
        exit;
    }
    $conn = mysqli_connect("localhost","root","","progetto" ) or die(mysqli_error($conn));
    $username = mysqli_real_escape_string($conn, $_GET["q"]);
    $query = "SELECT username FROM bambino WHERE username = '$username'";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo json_encode(array('exists' => mysqli_num_rows($res) > 0 ? true : false));
    mysqli_close($conn);
?>