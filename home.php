<?php
session_start();
if (!isset($_SESSION["user"])){
   header("Location: signin.php");
   exit();
   
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Christmas village</title>
    <link rel="stylesheet" href="home.css" />  
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chango&family=Noto+Serif:ital,wght@1,700&display=swap"
        rel="stylesheet">
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
        <h1>Christmas Village</h1>
        <img src="img/luci-natale.png">
        <div class="overlay"></div>
    </header>

    <section>
        <div class="box">  
            <img src="img/lettera.jpeg">
            <div class="testo">
                <h1>Babbo Natale ti aspetta:</h1>
                <h2>Scrivi la tua letterina!</h2>
                <p class="justify">Ogni anno milioni di bambini scrivono una lettera.</br> Adesso anche tu puoi esprimere i tuoi desideri.</p>
                <a class="button" href="writeLetter.php">Clicca qui</a>
            </div>
        </div>
    <div class="box">  
            <img src="img/letter.png">
            <div class="testo">
                <h2>Vuoi leggere le tue vecchie lettere?</h2>
                <p>Puoi scegliere l'anno di cui desideri leggere la tua lettera!</br>Conserviamo con cura tutti i tuoi ricordi.</p>
                <a class="button"  href="readLetter.php">Clicca qui</a>
            </div>
        </div>
        <div class="box">  
            <img src="img/music.png">
            <div class="testo">
                <h2>Intrattieniti insieme a noi</h2>
                <p>Puoi cercare tutta la tua musica che vuoi!</p>
                <a class="button"  href="music.php">Clicca qui</a>
                <p>Non dimenticarti di salvare i tuoi brani preferiti nelle tue playlist.</p>
                <a class="button"  href="playlist.php">Vai alle mie playlist!</a>
            </div>
        </div>
    </section>

    <footer>
        <p>Christmas village- 325 S. Santa Claus Lane North Pole, AK 99705- santaclaus@gmail.com
            <br />Clelia Agata Nicotra O46002019</p>
    </footer>

</body>

</html>