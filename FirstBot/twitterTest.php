<?php
//Use OAuth
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

//Authentificate information
$consumerKey = "7jlRrxj5W7RUB8zbxpQkCNCsi";
$consumerSecret = "z1pukq53rIb2iZIbPrG6Zbiz2G3xyUPb0SKyM0LOgqSdxt68RX";
$accessToken = "880275453256146944-YeGzcwKeVFGsdGTqHlXvxHHYjablsRV";
$accessTokenSecret = "xd1ryfnPfrrBh8fXY3e9KyuMB0cRr4WvFeF0ZGjORcVck";

//Build a connection
$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

//Random Tweet
$body;
$random = rand(0, 10);

switch($random){
  case 1:
    $body = "Botなう";
    break;
  case 2:
    $body = "つきや行きてえ";
    break;
  case 3:
    $body = "行く学科ミスったわ";
    break;
  case 4:
    $body = "WRESS楽しい";
    break;
  case 5:
    $body = "Swift楽しいな〜";
    break;
  case 6:
    $body = "フルスタックエンジニアに、俺はなる！！（大嘘）";
    break;
  default:
    $body = "有益な情報流してなくてごめんなさい...";
    break;
}

//Tweet
$res = $connection->post("statuses/update", array("status" => $body));
print_r($res);
?>
