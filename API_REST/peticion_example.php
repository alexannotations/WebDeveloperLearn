<?php

/** ---------------------------------------------------------------- */
// Peticón REST GET
$url = 'https://xkcd.com//info.0.json';
$json = file_get_contents($url);
$data_array = json_decode($json, true);
echo $data_array['img'].PHP_EOL;


/** ---------------------------------------------------------------- */
// Peticion POST, login en un servidor
$url2 = 'https://api.example.com/api/1.0/user/login';
$data_post = [
    'username' => 'admin',
    'password' => '0123456789',
];

$payload = json_encode($data_post);

$ch = curl_init($url2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);   // petición POST
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER,
[
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload)
]);

$result = curl_exec($ch);
curl_close($ch);

