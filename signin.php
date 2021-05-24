<?php
     session_start();
     if(isset($_SESSION["user"]))
     {
         header("Location: home.php");
         exit;
     }
     if(isset($_POST["username"]) && isset($_POST["password"]))
     {
         $conn = mysqli_connect("localhost", "root", "", "progetto");
 
         $username = mysqli_real_escape_string($conn, $_POST["username"]);
         $password = mysqli_real_escape_string($conn, $_POST["password"]);
 
         $query = "SELECT * FROM bambino WHERE Username ='".$username."'";
         $res =mysqli_query($conn, $query);
         if(mysqli_num_rows($res)>0) 
         {  $entry=mysqli_fetch_assoc($res);
            $hash= $entry['Password'];
            if(password_verify($password, $hash)){
            $id_user=mysqli_query ($conn, "SELECT id from bambino where username='$username'");
            $id=mysqli_fetch_row($id_user);
            $_SESSION["user"]= $id[0]; 
            header("Location: home.php");
            mysqli_close($conn);
            exit;
            }
         }
         else
         {
             $error = "Username e/o password errati.";
         }
     }
?>

<html>
    <head>
        <link rel="stylesheet" href="signin.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
    </head>

    <body>
        <h1>Accedi</h1>
        <form id = 'signin_form' method='POST'>
            <label for= 'username'>Username</label>
            <input type= 'text' name= 'username'>
            <label for= 'password'>Password</label>
            <input type= 'password' name= 'password'>
            <input type= 'submit' class="submit" value="Accedi">
        </form>
        <div>
            <a class="button" href="signup.php">Crea un nuovo account</a>
        </div>
    </body>
</html>