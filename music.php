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
    <title>Music</title>
    <link rel="stylesheet" href="movie_music.css"/>
    <script src="api_music.js" defer></script>   
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Assistant:wght@200;400&family=Cormorant+Garamond:wght@300;500&family=DM+Serif+Display&family=Merriweather+Sans:ital,wght@0,600;1,800&family=Volkhov&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Assistant:wght@200;400&family=Cormorant+Garamond:wght@300&family=Merriweather+Sans:ital,wght@0,600;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <a href="home.php">Home</a>
        <a href ="writeLetter.php">Scrivi la letterina</a>
        <a href="readLetter.php">Leggi le tue letterine</a>
        <a href="logout.php">Logout</a>
        <div id="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </nav>
    <header id= "music_header">
        <h1>Cerca un brano</h1>
        <div class="overlay"></div>
    </header>

    <form id="music_form"> 
        <input type="text" name="track" id="search_music" placeholder="Inserisci il titolo del brano">
        <input type='submit' class="submit" value="Cerca">
    </form>
    <div class=playlist>
        <a href="playlist.php"><input type='button' class="submit" value="Le mie playlist" id="playlist_button"> </a>
    </div> 
    <div id="select_playlist" class="hidden"></div>
    <section id="music_section">
        <div class="blank_space"></div>
    </section>
         
    <footer>
        <p>Christmas village- 325 S. Santa Claus Lane North Pole, AK 99705- santaclaus@gmail.com
        <br />Clelia Agata Nicotra O46002019</p>
    </footer>
</body>

</html>