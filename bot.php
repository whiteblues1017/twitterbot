/*
Date:2016/09/23
author:Hoshino Eiko
 */
<?php
require "autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

//Consumer Key (API Key) の値
$consumerKey = "AkCe3qtcjeSvWellVnVPoTcsW";
 //Consumer Secret (API Secret)の値
$consumerSecret = "3CtsnZg8pJh1xOVp9yxpSFy66tisA1JXuV8DbLuEApSfWEJYf2";
 //Access Tokenの値
$accessToken = "776698205778026496-RRLwrFbRVSiWuZnzZvZXBVuoMOoa0bX";
//Access Token Secretの値
$accessTokenSecret = "NuaosVtD9ung12mIttjl2jhQInrIeVv8naIAqLjhufy8t";

$filelist=file('list.txt');
if(shuffle($filelist)){
    $message=$filelist[0];
}


$connec = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

$connec->post("statuses/update", array("status" => $message));
