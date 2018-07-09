<?php



require "vendor/autoload.php";

$access_token = 'pmc4QkO66rnCdqBtfBuP1IVWXnCAobmjZvP6vp+dVFcdgCPYAlNylL7pKWDcKsQ/2uWa78W12A0BafcwDagfATUhkfEo0vFnvoPkNBmJKlLmcJQd9D+kuXbf3tKCwaAbMYKatrJZhkp64CnkBx82UQdB04t89/1O/w1cDnyilFU=
';

$channelSecret = 'e4f4152e122567da21cb843ce43a8787';

$pushID = 'U10598e2c4a91261df760ffa85d8e7b4e';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







