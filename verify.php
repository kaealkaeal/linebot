<?php
$access_token = '3FTzTxu3B44Qcmwk3GVrkKtQdCCAMdLMmuOedifnUywJtBiXE+gYQaYsoZid4ZvrQ31g7NfUy3SDxp12hgykLbTaSzwhkzat3cLlttIPh9ppk9gzE6dQMrFLplroySeWypSQ8kpySvBJbZIdGfohewdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;