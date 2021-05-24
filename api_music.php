<?php
header('Content-Type: application/json');
    $apikey='f7ccd1784de9a425dd67553edf6bfc15';
    $query = urlencode($_GET["track"]);
    $url = 'http://ws.audioscrobbler.com/2.0/?method=track.search&track='.$query.'&api_key='.$apikey;
    $ch=curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    curl_close($ch);
   
    $xml =  simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOWARNING | LIBXML_NOERROR);;
    $json = json_encode($xml);
    $result= json_decode($json, true);
    $ArrayJson[]= array();
    for($i=0; $i<count($result['results']['trackmatches']['track']);$i++)
        $ArrayJson[] = array('name' => $result['results']['trackmatches']['track'][$i]['name'],'artist' => $result['results']['trackmatches']['track'][$i]['artist'], 'url' => $result['results']['trackmatches']['track'][$i]['url']);
        
    echo json_encode($ArrayJson);

?>