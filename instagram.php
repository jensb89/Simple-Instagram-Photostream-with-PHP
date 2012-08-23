<?php
$url="https://api.instagram.com/v1/users/{user-id}/media/recent?access_token=TOKEN";

// Get cURL resource
$curl = curl_init();
// Options
curl_setopt_array($curl, array(
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_URL => $url,
  CURLOPT_TIMEOUT => 4
 ));
// Send the request & save response to $resp
$resp = curl_exec($curl);
curl_close($curl);
	
if($resp){
	$data=json_decode($resp, true);
	foreach($data['data'] as $images){
	  echo '<a href="'.$images['link'].'" ><img src="'.$images['images']['thumbnail']['url'].'" /></a>';
	}
}
else echo "FEHLER";
?>