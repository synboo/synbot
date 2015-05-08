<?php
/*
 * Time signal
 */

require "SecretDefines.php"
require "../vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

$consumer_key        = SecretDefines::TW_CONSUMER_KEY;
$consumer_secret     = SecretDefines::TW_CONSUMER_SECRET;
$access_token        = SecretDefines::TW_ACCESS_TOKEN;
$access_token_secret = SecretDefines::TW_ACCESS_TOKEN_SECRET;

$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);

$status = date('G').'時だにゃー';
$result = $connection->post("statuses/update", array("status" => $status));

// success
if (!isset($result->errors)) {
	echo "tweet success: $status\n";
}
// fail
else {
	echo "tweet fail:\n";
	var_dump($result->errors);
}