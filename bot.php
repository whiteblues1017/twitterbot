/*
Date:2016/09/23
author:Hoshino Eiko
 */
<?php
require "../twitteroauth-master/autoload.php";
require "config.php";
use Abraham\TwitterOAuth\TwitterOAuth;
//日付指定

$date=new DateTime('now',new DateTimeZone('Asia/Tokyo'));


$filelist=file('list.txt');
if(shuffle($filelist)){
    $message=$filelist[0].''.$date->format('Y/m/d H:i');
}


$connec = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

$connec->post("statuses/update", array("status" => $message));
