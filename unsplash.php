<?php
header('Content-Type: application/json');

$client_id = "GsM7sIcrCB3gXo-FrjFA4WQQV8IDZMOjp3kSpQy-z8k";

$url = 'https://api.unsplash.com/search/photos?query=christmas&per_page=20&content_filter=high&orientation=landscape&client_id='. $client_id;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$res = curl_exec($ch);
curl_close($ch);

$json = json_decode($res, true);

$newJson = array();
for($i=0;$i<count($json['results']); $i++)
{
    $newJson[]= array('preview' => $json['results'][$i]['urls']['thumb']);
}
echo json_encode($newJson);
?>