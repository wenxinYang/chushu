<?php
$host = "http://yuyin2.market.alicloudapi.com";
$path = "/dx/voice_notice";
$method = "POST";
$appcode = "723dcb18f0984ef3bd80b784add12b36";
$headers = array();
array_push($headers, "Authorization:APPCODE " . $appcode);
$querys = "param=param&phone=18515881357&tpl_id=TP18031516";
$bodys = "这是一个测试";
$url = $host . $path . "?" . $querys;

$curl = curl_init();
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_FAILONERROR, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, true);
if (1 == strpos("$".$host, "https://"))
{
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
}
var_dump(curl_exec($curl));
?>