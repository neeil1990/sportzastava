<?php

//Удаление keywords и description
AddEventHandler("main", "OnEndBufferContent", "deleteMetaTags");
function deleteMetaTags(&$content)
{
    $content = preg_replace(array('/<meta(.*?)keywords(.*?)>/','/<meta(.*?)description(.*?)>/'),"",$content);
}


function getCityForIp($ip){
    $xml = new CDataXML();
    if(!$ip)
    $ip = $_SERVER['REMOTE_ADDR'];

    $result = file_get_contents('http://ipgeobase.ru:7020/geo?ip='.$ip);
    $xml->LoadString(iconv("Windows-1251", "UTF-8", $result));
    if ($node = $xml->SelectNodes('/ip-answer/ip/city')) {
        return $node->textContent();
    }
}

function showDatePlusDay($day){
    return date("d.m.Y", strtotime("+$day day"));
}