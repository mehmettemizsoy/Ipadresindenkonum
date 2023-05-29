<?php
function IPBul(){
    if(!empty($_SERVER["HTTP_CLIENT?IP"])){
        $ipAdress = $_SERVER["HTTP_CLIENT_IP"];
    }elseif(!empty($_SERVER["HTTTP_X_FORWARDED_FOR"])){
        $ipAdress = $_SERVER["HTTP_X_FORWARDED_FOR"];
    }else {
        $ipAdress = $_SERVER["REMOTE_ADDR"];
    }
    return $ipAdress;
}
//echo $ip = IPBul();

//JSON
$api = file_get_contents("http://ip-api.com/json/24.48.0.1");
//print_r($api);
$dec =json_decode($api);
//print_r($dec);
echo "Ülke: $dec->country($dec->countryCode)<br>Sehir: $dec->city($dec->region)<br>";


?>