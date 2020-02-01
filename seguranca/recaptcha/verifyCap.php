<?php

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["g-recaptcha-response"])){
    $capResp = $_POST["g-recaptcha-response"];

    $ch = curl_init("https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
        "secret"=>"secret-key",
        "response"=>$capResp,
        "remoteip"=>$_SERVER["REMOTE_ADDR"]
    )));
    $capReturn = json_decode(curl_exec($ch), true);
    curl_close($ch);

    if($capReturn["success"]){
        setcookie("OKnews", true, time()+10);
        header("Location: index.php");
    }else{
        header("Location: cadastro.php");
    }
}else{
    header("Location: cadastro.php");
}
