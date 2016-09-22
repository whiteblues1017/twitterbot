/*
Date:2016/09/23
author:Hoshino Eiko
 */
<?php
require "autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

$consumerKey = "AkCe3qtcjeSvWellVnVPoTcsW";    //Consumer Key (API Key) の値
$consumerSecret = "3CtsnZg8pJh1xOVp9yxpSFy66tisA1JXuV8DbLuEApSfWEJYf2";    //Consumer Secret (API Secret)の値
$accessToken = "776698205778026496-RRLwrFbRVSiWuZnzZvZXBVuoMOoa0bX";    //Access Tokenの値
$accessTokenSecret = "NuaosVtD9ung12mIttjl2jhQInrIeVv8naIAqLjhufy8t";    //Access Token Secretの値

$connec = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

$connec->post("statuses/update", array("status" => "ツイートしたぞい！"));
