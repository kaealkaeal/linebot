<?php
$access_token = '9s7wpqo8THjXYR5A0ToQtANCMKD3jqr2ii8FOA1Wlojj1KnVSNF+c76PZRaGjNQlUETdpltlz77xEEvg/T3pKaWmaDG7SYDoh7wcnlsyRwlWbrKGA2sSpreJxcJE7SrhJaFotOJlXb86S41i/mEiFAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
