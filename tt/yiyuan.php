<?php
$host = "http://ali-voice.showapi.com";
$path = "/createTemplate";
$method = "GET";
$appcode = "723dcb18f0984ef3bd80b784add12b36";
$headers = array();
array_push($headers, "Authorization:APPCODE " . $appcode);
$querys = "content=%E5%B0%8A%E6%95%AC%E7%9A%84%5BuserName%5D%2C%E6%82%A8%E5%A5%BD%21%E6%82%A8%E7%9A%84%E5%BF%AB%E9%80%92%E5%8D%95%E5%8F%B7%5BmailNo%5D%E6%AD%A3%E5%9C%A8%E6%B4%BE%E9%80%81%E4%B8%AD%2C%E8%AF%B7%E6%B3%A8%E6%84%8F%E7%AD%BE%E6%94%B6%21&notiPhone=18515881357";
$bodys = "";
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