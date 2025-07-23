<?php


$url = "https://jsonplaceholder.typicode.com/posts/1";

$ch = curl_init();


curl_setopt($ch, CURLOPT_URL, $url);            
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  


$response = curl_exec($ch);


if ($response==FALSE) {
    echo 'Error: ';
} else {
   
    echo "the response is ".$response;
}


curl_close($ch);
