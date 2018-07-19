<?php
require "./twilio-php-master/Twilio/autoload.php";
use Twilio\Rest\Client;

if(!isset($_GET['print'])){

    $account_sid    = "ACxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
    $APIKey         = "SKxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
    $APISec         = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
    $twilio_number  = "xxxxxxxxxxxxxxxx";
    $to_number      = "xxxxxxxxxxxxxxxx";
    
    $client = new Client($APIKey, $APISec, $account_sid);
    
$client->account->calls->create(  
    $to_number,
    $twilio_number,
    array(
        "url" => "http://demo.codeot.com/twilio_temp/res.xml"
    )
);
    
}else{
    $res = print_r($_GET,true);
    $file = fopen("res","a");
    fwrite($file,$res);
    fclose($file);
}
?>