<?php
    session_start();
    if (!isset($_SESSION["user"])){
        header("Location: signin.php");
        exit();
   
    }
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Letter to Santa</title>
    <link rel="stylesheet" href="letter.css" />
    <script src="readLetter.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <a href="home.php">Home</a>
        <a href = "writeLetter.php">Scrivi la letterina</a>
        <a href="readLetter.php">Leggi le tue letterine</a>
        <a href="logout.php">Logout</a>
        <div id="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </nav>
    <header id="read_letter_header">
        <h1>LEGGI LE TUE LETTERINE</h1>
        <div class="overlay"></div>
    </header>
        <form id="read_letter_form">
                <label for="past_letter">Seleziona un anno</label>
                <select id="past_letter"></select>  
                <button id="drop_button" >Leggi la letterina</button>
        </form>
    <section id="read_letter_section">
        <div class= "div_letter"></div>
        <div class="blank_space"></div>
    </section>
    <footer>
        <p>Christmas village- 325 S. Santa Claus Lane North Pole, AK 99705- santaclaus@gmail.com
            <br />Clelia Agata Nicotra O46002019</p>
    </footer>
</body>

</html>