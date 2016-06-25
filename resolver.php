<?php

$skypeAccount = 'SKYPE_ACCOUNT';
$key = 'YOUR_API_KEY';
$url = "http://api.skresolver.com/?format=json&apikey=$key&user=$skypeAccount"; //For multiple add: &multiple=1

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
$result = curl_exec($ch);
curl_close($ch); 
$result = json_decode($result);

$statusCode = $result->meta->statusCode;
$data = $result->data;
$user = $result->data->user;
$ip = $result->data->ip;
$port = $result->data->port;
$country = $result->data->country;
$avatarURL = $result->data->avatarURL;

if($statusCode == 200)
{
	if(isset($data))
	{
		echo "User: $user <br />";
		echo "IP: $ip <br />";
		echo "Port: $port <br />";
		echo "Country: $country <br />";
		echo "avatar: $avatarURL";
	}
	else
		echo "No IP address has been found";
}
else
{
	echo "Service unavailable";
}

?>
