<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.themoviedb.org/3/movie/550?api_key=b9594ee9ee78fec276f89408d4f846f9");
$output = curl_exec($ch);
curl_close($ch);
var_dump(json_decode($output, true));
?>