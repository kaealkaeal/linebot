<?php
$access_token = 'm0zpX5Jlg6jeUBWm+hRooFx0v6464J2uVMEZzUbl4agWBbeoSBxdCs7zOR/d5ez/Q31g7NfUy3SDxp12hgykLbTaSzwhkzat3cLlttIPh9qCzQaSi+jwnANKEqcSZ4tkZuVMHeItDN4fRxQohwlYsgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;