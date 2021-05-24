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
    <script src="letter.js" defer></script>
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
    <header>
        <h1>SCRIVI LA TUA LETTERINA</h1>
        <div class="overlay"></div>
    </header>
    <section id="letter_section">
    <form id="letter_form" >
        <label>Seleziona i tuoi giocattoli preferiti</label></br>
        <div id= "checkbox"></div></br> 
        <label for="message">Scrivi il tuo messaggio per Babbo Natale:</label>
        <input type="text" placeholder="Caro Babbo Natale..." id="message" name="message"></br> 
        <div id="text_image">
            <span id = "change_text">Aggiungi un'immagine alla letterina</span>
        </div> 
        <input type="button" id="images_button"value="Mostra immagini">
        <input type="submit" class="submit" id="letter_submit" value="Invia">   
    </form>
    </section>
    <footer>
        <p>Christmas village- 325 S. Santa Claus Lane North Pole, AK 99705- santaclaus@gmail.com
            <br />Clelia Agata Nicotra O46002019</p>
    </footer>
</body>

</html>