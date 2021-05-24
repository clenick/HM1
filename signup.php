<?php
    session_start();
    if (isset($_SESSION["user"])){
        header("Location: home.php");
        exit();
    }
 
    if (isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["age"]) && isset($_POST["address"]) && isset($_POST["email"]) && isset($_POST["username"]) && 
    isset($_POST["password"]) && isset($_POST["psw_confirm"]))
    {   $error= array();
        $conn = mysqli_connect("localhost","root","","progetto" ) or die(mysqli_error($conn));
        $nome= mysqli_real_escape_string($conn,$_POST["name"]);
        $cognome= mysqli_real_escape_string($conn,$_POST["surname"]);
        $eta= mysqli_real_escape_string($conn,$_POST["age"]);
        $indirizzo= mysqli_real_escape_string($conn,$_POST["address"]);
        $email= mysqli_real_escape_string($conn,$_POST["email"]);
        $username= mysqli_real_escape_string($conn,$_POST["username"]);
        $query = "SELECT username FROM bambino WHERE username = '$username'";
        if(mysqli_num_rows(mysqli_query($conn, $query))>0)
        {
            $error[] = "Username non disponibile";
        }
        $password= mysqli_real_escape_string($conn,$_POST["password"]);
        if( strlen($password)<7 || !preg_match('`[A-Z]`',$password) || !preg_match('`[a-z]`',$password) || !preg_match('`[0-9]`',$password)){ 
                $error[] = "Password non valida";
        }
    
        if ($_POST["password"]!==$_POST["psw_confirm"]) {
            $error[] = "Le password che hai inserito sono diverse.";
        }
        if (count($error) == 0) {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO bambino VALUES ('','$nome', '$cognome','$eta','$indirizzo','$username' ,'$email' , '$password')";
            if(mysqli_query($conn, $query))
            {   
                $id_user=mysqli_query ($conn, "SELECT id from bambino where username='$username'");
                $id=mysqli_fetch_row($id_user);
                $_SESSION["user"]= $id[0];  
                mysqli_close($conn);
                header("Location: home.php");
                exit();
            }
            mysqli_close($conn);
        }
    }
   else if(empty($_POST["name"]) || empty($_POST["surname"]) || empty($_POST["age"]) || empty($_POST["address"])|| empty($_POST["email"]) || empty($_POST["username"]) ||
    empty($_POST["password"]) ||empty($_POST["psw_confirm"])){
        $error = array("Riempi tutti i campi");
    }
?>
<!DOCTYPE html>
<html>   
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Christmas Village - Registrazione</title>
        <script src="signup.js" defer></script>
        <link rel="stylesheet" href="signup.css"/>
        <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
    </head>
    <body>
        <form name = 'signup_form' method='POST'>
            <h1>Registrati</h1>
            <div class = "signup_name">
                <label for= 'name'>Nome</label></br>
                <input type= 'text' name= 'name' id= "name_input">
                <span class="hidden">Inserisci un nome</span>
            </div>
            <div class = "signup_name">
                <label for= 'surname'>Cognome</label></br>
                <input type= 'text' name= 'surname' id= "surname_input">
                <span class="hidden">Inserisci un cognome</span>
            </div>
            <div class = "signup_age">
                <label for= 'age'>Età</label></br>
                <input type= 'number' name= 'age' id= "age_input" min="0">
                <span class="hidden">Inserisci un età</span>
            </div>
            <div class = "signup_name">
                <label for= 'address'>Indirizzo</label></br>
                <input type= 'text' name= 'address' id= "address_input">
                <span class="hidden">Inserisci un indirizzo</span>
            </div>
            <div class = "signup_email">
                <label for= 'email'>E-mail</label></br>
                <input type= 'text' name= 'email' id= "email_input">
                <span class="hidden">Inserisci un'email valida</span>
            </div>
            <div class = "signup_username">
                <label for ='username'>Username</label></br>
                <input type= 'text' name= 'username' id= "username_input">
                <span class="hidden" id="span_username">Username non disponibile</span>
            </div>
            <div class = "signup_password">
                <label for= 'password'>Password</label></br>
                <input type= 'password' name= 'password' id= "password_input">
                <span class="hidden">Inserisci una password di almeno 8 caratteri con maiuscole e numeri</span>
            </div>
            <div class = "signup_psw_confirm">
                <label for= 'psw_confirm'>Ripeti password</label></br>
                <input type= 'password' name= 'psw_confirm' id= "psw_confirm_input">
                <span class="hidden">Password diverse</span>
            </div>
            <input type= 'submit' class="submit" value='REGISTRATI'>
        </form>
    </body>
</html>