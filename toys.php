<?php
    header('Content-Type: application/json');
    
    $conn = mysqli_connect("localhost","root" ,"" ,"progetto") or die(mysqli_error($conn));
    $query = "SELECT Codice,Nome,Categoria,Descrizione,Immagine FROM giocattolo";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $array = array();
    while($toys = mysqli_fetch_assoc($res)){
        $array[] = array('Codice' => $toys['Codice'],'Nome' => $toys['Nome'],'Categoria' => $toys['Categoria'],'Descrizione' => $toys['Descrizione'], 'Immagine' => $toys['Immagine']);
    }
    echo json_encode($array);
    mysqli_close($conn);
    exit;
?>