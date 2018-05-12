<?php
// verify envato purchase code
function verify_envato_purchase_code($code_to_verify) {

	// Open cURL channel
	$ch = curl_init();

	// Set cURL options
	curl_setopt($ch, CURLOPT_URL, "http://marketplace.envato.com/api/edge/". ENVATO_USERNAME ."/". ENVATO_KEY ."/verify-purchase:". $code_to_verify .".json");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

 	//Set the user agent
 	$agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)';
 	curl_setopt($ch, CURLOPT_USERAGENT, $agent);
	// Decode returned JSON
	$output = json_decode(curl_exec($ch), true);

	// Close Channel
	curl_close($ch);

	// Return output
	return $output;
}
