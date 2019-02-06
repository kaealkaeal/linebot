<?php



require "vendor/autoload.php";

$access_token = '3FTzTxu3B44Qcmwk3GVrkKtQdCCAMdLMmuOedifnUywJtBiXE+gYQaYsoZid4ZvrQ31g7NfUy3SDxp12hgykLbTaSzwhkzat3cLlttIPh9ppk9gzE6dQMrFLplroySeWypSQ8kpySvBJbZIdGfohewdB04t89/1O/w1cDnyilFU=';

$channelSecret = '9ffd6d2c7b07dab345043a69bd987335';

$pushID = 'U92e74f8ce3595165ba396dbef155629a';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







