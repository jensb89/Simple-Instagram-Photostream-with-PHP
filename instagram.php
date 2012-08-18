<?php
$url="https://api.instagram.com/v1/users/self/feed?access_token=TOKEN";

// Get cURL resource
    $curl = curl_init();
 // Set some options
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url
    ));
// Send the request & save response to $resp
    $resp = curl_exec($curl);
// Close request to clear up some resources
    curl_close($curl);
    /*if($resp){
        echo $resp;
    } //JSON AUSGABE */ 
	
	$data=json_decode($resp, true);
	foreach($data['data'] as $images){
	echo '<a href="'.$images['link'].'" ><img src="'.$images['images']['thumbnail']['url'].'" /></a>';
	}
?>