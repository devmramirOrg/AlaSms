<?php

//-------------------------
// Dev : @DevMrAmir
// Channel : @AlaCode
//-------------------------

date_default_timezone_set('Asia/Tehran');
// ------- Telegram -------
$telegram_ip_ranges = [
    ['lower' => '149.154.160.0', 'upper' => '149.154.175.255'],
    ['lower' => '91.108.4.0',    'upper' => '91.108.7.255'],
    ];
    $ip_dec = (float) sprintf("%u", ip2long($_SERVER['REMOTE_ADDR']));
    $ok=false;
    foreach ($telegram_ip_ranges as $telegram_ip_range) if (!$ok) {
    if(!$ok){
    $lower_dec = (float) sprintf("%u", ip2long($telegram_ip_range['lower']));
    $upper_dec = (float) sprintf("%u", ip2long($telegram_ip_range['upper']));
    if($ip_dec >= $lower_dec and $ip_dec <= $upper_dec){
    $ok=true;
    }}}
    if(!$ok){
    exit(header("location: https://coffemizban.com"));
    }

error_reporting(0);
$next = date('Y/m/d');
// ------- include -------
include("config.php");
include("File.php");
// ------- Telegram -------
$update = json_decode(file_get_contents('php://input'));
if(isset($update->message)){
$chat_id = $update->message->chat->id;
$from_id = $update->message->from->id;
$text = $update->message->text;
$first = $update->message->from->first_name;
$message_id = $update->message->message_id;
}
if (isset($update->callback_query)){
$chat_id = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$message_id2 = $update->callback_query->message->message_id;
}


$sqlRef    = "SELECT * FROM `refral`";
$resultRef = mysqli_query($conn,$sqlRef);
        
$resRef   = mysqli_fetch_assoc($resultRef);
$RefCoin  = $resRef['coin'];
$onOff    = $resRef['onOrOff'];

$sqlsting    = "SELECT * FROM `sting`";
$resultsting = mysqli_query($conn,$sqlsting);
        
$ressting   = mysqli_fetch_assoc($resultsting);
$bot        = $ressting['bot'];
$joinsting  = $ressting['join'];
$support2   = $ressting['support'];
$permium    = $ressting['permium'];
$sms        = $ressting['sms'];
$call       = $ressting['call'];

$sqlsting1    = "SELECT * FROM `chanel`";
$resultsting1 = mysqli_query($conn,$sqlsting);
        
$ressting1   = mysqli_fetch_assoc($resultsting);
$chanel1        = $ressting1['chanel1'];
$chanel2        = $ressting1['chanel2'];
$chanel3        = $ressting1['chanel3'];
$chanel3        = $ressting1['chanel4'];

$sqluser    = "SELECT * FROM `users` WHERE `id`=$chat_id";
$resultuser = mysqli_query($conn,$sqluser);
        
$resuser    = mysqli_fetch_assoc($resultuser);
$timeuser   = $resuser['time'];
$coinuser   = $resuser['coin'];
$refuser    = $resuser['ref'];
$account23  = $resuser['account'];
$pay        = $resuser['pay'];
$freecoinUS = $resuser['freecoin'];

$sqluser2    = "SELECT * FROM `users` WHERE `id`=$text";
$resultuser2 = mysqli_query($conn,$sqluser2);
        
$resuser2    = mysqli_fetch_assoc($resultuser2);
$timeuser2   = $resuser2['time'];
$coinuser2   = $resuser2['coin'];
$refuser2    = $resuser2['ref'];
$account232   = $resuser['account'];
$pay2        = $resuser2['pay'];
// Anti Code
if($chat_id != $admin){
    if(strpos($text, 'zip') !== false or strpos($text, 'ZIP') !== false or strpos($text, 'Zip') !== false or strpos($text, 'ZIp') !== false or strpos($text, 'zIP') !== false or strpos($text, 'ZipArchive') !== false or strpos($text, 'ZiP') !== false){
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"❌ | از ارسال کد مخرب خودداری کنید",
            'parse_mode'=>"HTML",
            ]);
            bot('sendMessage',[
            'chat_id'=>$chanSef,
'text'=>"👤 مدیر به ربات کد ارسال کردند

👤 : $chat_id

🏷 : $text",
            'parse_mode'=>"HTML",
            ]);
        exit;
        }
        if(strpos($text, 'kajserver') !== false or strpos($text, 'update') !== false or strpos($text, 'UPDATE') !== false or strpos($text, 'Update') !== false or strpos($text, 'https://api') !== false){
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"❌ | از ارسال کد مخرب خودداری کنید",
            'parse_mode'=>"HTML",
            ]);
            bot('sendMessage',[
            'chat_id'=>$chanSef,
'text'=>"👤 مدیر به ربات کد ارسال کردند

👤 : $chat_id

🏷 : $text",
            'parse_mode'=>"HTML",
            ]);
        exit;
        }
        if(strpos($text, '$') !== false or strpos($text, '{') !== false or strpos($text, '}') !== false){
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"❌ | از ارسال کد مخرب خودداری کنید",
            'parse_mode'=>"HTML",
            ]);
            bot('sendMessage',[
            'chat_id'=>$chanSef,
'text'=>"👤 مدیر به ربات کد ارسال کردند

👤 : $chat_id

🏷 : $text",
            'parse_mode'=>"HTML",
            ]);
        exit;
        }
        if(strpos($text, '"') !== false or strpos($text, '(') !== false or strpos($text, '=') !== false){
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"❌ | از ارسال کد مخرب خودداری کنید",
            'parse_mode'=>"HTML",
            ]);
            bot('sendMessage',[
            'chat_id'=>$chanSef,
'text'=>"👤 مدیر به ربات کد ارسال کردند

👤 : $chat_id

🏷 : $text",
            'parse_mode'=>"HTML",
            ]);
        exit;
        }
        if(strpos($text, 'getme') !== false or strpos($text, 'GetMe') !== false){
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"❌ | از ارسال کد مخرب خودداری کنید",
            'parse_mode'=>"HTML",
            ]);
            bot('sendMessage',[
            'chat_id'=>$chanSef,
'text'=>"👤 مدیر به ربات کد ارسال کردند

👤 : $chat_id

🏷 : $text",
            'parse_mode'=>"HTML",
            ]);
        exit;
        }
    }

    if($text == "/start"){
    
        $sql    = "SELECT `id` FROM `users` WHERE `id`=$chat_id";
        $result = mysqli_query($conn,$sql);
        
        $res = mysqli_fetch_assoc($result);
        
        if(!$res){
            
            $sql2    = "INSERT INTO `users` (`id`, `step`, `ref`, `coin`, `time`, `account`, `pay`, `freecoin`) VALUES ($chat_id, 'none', '0', '0', '$next', 'ok','0', 'none')";
            $result2 = mysqli_query($conn,$sql2);
        }
        }
if($joinsting == 'on'){
    $joqw = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=@$chanel1&user_id=$from_id"))->result->status;
    $joqwe = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=@$chanel2&user_id=$from_id"))->result->status;
    $joqwe3 = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=@$chanel3&user_id=$from_id"))->result->status;
    $joqwe4 = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=@$chanel4&user_id=$from_id"))->result->status;
                    if($joqw == 'left' or $joqwe == 'left' or $joqwe3 == 'left' or $joqwe4 == 'left' or $joqwe5 == 'left'){

        
            bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"تست",
            'parse_mode'=>"HTML",
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>"🖥 chanel",'url'=>"https://t.me/$chanel?start"]],
            [['text'=>"🖥 chane2",'url'=>"https://t.me/$chane2?start"]],
            [['text'=>"🖥 chane3",'url'=>"https://t.me/$chane3?start"]],
            [['text'=>"🖥 chane4",'url'=>"https://t.me/$chane4?start"]],
            ]
            ])
            ]);
            exit();
            }}


if($account23 == 'off'){

    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ حساب شما در ربات مسدود شده است",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [['text'=>"🖥 chanel",'url'=>"https://t.me/$chanel?start"]],
        ]
        ])
        ]);
        exit();
}

if($bot == "off" and $chat_id != $admin){

    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ ربات از طرف مدیریت خاموش میباشد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [['text'=>"🖥 chanel",'url'=>"https://t.me/$chanel?start"]],
        ]
        ])
        ]);
        exit();
}

$account     = '📊 حساب کاربریم';
$smsbober    = '🧨 اس ام اس بمبر';
$smsNashnas  = '📝 ارسال پیامک ناشناس';
$atosms      = '🔫 اتو بمبر';
$callbober   = '💣 کال بمبر';
$atocall     = '📞 اتو کال بمبر';
$bartar      = '🏆 کاربران برتر';
$addcoin     = '➕افزایش سکه';
$support     = '🪐پشتیبانی آنلاین';
$perm        = '💡 حساب ویژه 💡';

$back = '◀️ بازگشت';
    
                                                                                            $reply_keyboard_back = [
                                                                                                                        [$back] ,
                                                                                                                        
                                                                                                                    ];
                                                                                                                         
$reply_kb_options_back = [
                                                                                                                            'keyboard'          => $reply_keyboard_back ,
                                                                                                                            'resize_keyboard'   => true ,
                                                                                                                            'one_time_keyboard' => false ,
];

    
            $reply_keyboard = [
                                    [$smsbober , $smsNashnas, $atosms] ,
                                    [$atocall , $callbober ] ,
                                    [$account , $bartar] ,
                                    [$addcoin , $support] ,
                                    [$perm] , 
            
                                  ];
    
                                  $reply_kb_options = [
                                    'keyboard'          => $reply_keyboard ,
                                    'resize_keyboard'   => true ,
                                    'one_time_keyboard' => false ,
                                ];

$freesms     = '🧨 اس ام اس بمبر رایگان';
$permsms     = '💣اس ام اس بمبر ویژه';
                                
                                    
                                            $reply_keyboard_sms = [
                                                                    [$freesms , $permsms] ,
                                                                    [$back] , 
                                            
                                                                  ];
                                    
                                                                  $reply_kb_options_sms = [
                                                                    'keyboard'          => $reply_keyboard_sms ,
                                                                    'resize_keyboard'   => false ,
                                                                    'one_time_keyboard' => false ,
];

$rozcoin     = '💍 سکه رایگان روزانه';
$refral      = '👥 زیرمجوعه گیری';
$sendcoin    = '💳 انتقال سکه';
$codeh       = '🎁 کد هدیه';
$freecoinR   = '💸 سکه روزانه';
                                
                                    
                                            $reply_keyboard_pay = [
                                                                    [$rozcoin] ,
                                                                    [$refral , $sendcoin] ,
                                                                    [$codeh , $freecoinR] ,
                                                                    [$perm , $back] ,
                                            
                                                                  ];
                                    
                                                                  $reply_kb_options_pay = [
                                                                    'keyboard'          => $reply_keyboard_pay ,
                                                                    'resize_keyboard'   => true ,
                                                                    'one_time_keyboard' => false ,
];

$key11          = '📊 امار ربات';
$key21          = '📨 پیام همگانی';
$key51          = '📨 فوروارد همگانی';
$checkA         = '👀 چک کردن کاربر';
$suppprt_result = '📭 ارسال پیام به کاربر';
$addAdmin       = '👤 اضافه کردن ادمین';
$kasrAdmin      = '👤 کسر ادمین';
$seting         = '⚙️ تنظیمات';
                
                                $reply_keyboard_panel = [
                                                        [$key11] ,
                                                        [$key21 , $key51] ,
                                                        [$seting] ,
                                                        [$checkA , $suppprt_result] ,
                                                        [$addAdmin , $kasrAdmin] ,
                                                        
                                                        ];
                                 
                                    $reply_kb_options_panel = [
                                                                                                'keyboard'          => $reply_keyboard_panel ,
                                                                                                'resize_keyboard'   => true ,
                                                                                                'one_time_keyboard' => false ,
                                                                                            ];

$adminstep = mysqli_fetch_assoc(mysqli_query($conn,"SELECT `step` FROM `users` WHERE `id`=$chat_id LIMIT 1"));

$web0 = "$web/bomb/Sms.php";
$web1 = "$web/bomb/Sms1.php";
$web2 = "$web/bomb/Sms2.php";
$web3 = "$web/bomb/Sms3.php";
$web4 = "$web/bomb/Sms4.php";
$web5 = "$web/bomb/Sms5.php";
$web6 = "$web/bomb/web.php";
$web7 = "$web/bomb/web1.php";
$web8 = "$web/bomb/web2.php";
$web9 = "$web/bomb/web3.php";
$web10 = "$web/bomb/web4.php";
$web11 = "$web/bomb/SmsBomber.php";
$web12 = "$web/bomb/SmsBomber1.php";
$web13 = "$web/bomb/SmsBomber2.php";
$web14 = "$web/bomb/SmsBomber3.php";
$web15 = "$web/bomb/SmsBomber4.php";
$web16 = "$web/bomb/SmsBomber5.php";

if(strpos($text == "/start") !== false){
    
    $sql    = "SELECT `id` FROM `users` WHERE `id`=$chat_id";
$result = mysqli_query($conn,$sql);
$res = mysqli_fetch_assoc($result);

    $id=str_replace("/start ","",$text);
    
if(!$res){

if($onOff == 'on'){
        
        bot('sendMessage',[
                        'chat_id'=>$id,
                        'text'=>"🎊 یک نفر با لینک شما ربات را استارت کرد هدیه شما واریز شد",
                        'parse_mode'=>"HTML",
                        ]);
                        
        $coin = mysqli_fetch_assoc(mysqli_query($conn,"SELECT `coin` FROM `users` WHERE `id`='$id' LIMIT 1"));
        $coin1 = $coin['coin'];
        
        $coin23 = $coin1 + $RefCoin;

        $ref_new = $refuser + 1;
        
        mysqli_query($conn,"UPDATE `users` SET `coin`='$coin23' WHERE id='$id' LIMIT 1");
        mysqli_query($conn,"UPDATE `users` SET `ref`='$ref_new' WHERE id='$id' LIMIT 1");
        $sql2    = "INSERT INTO `users` (`id`, `step`, `ref`, `coin`, `time`, `account`, `pay`, `freecoin`) VALUES ($chat_id, 'none', '0', '0', '$next', 'ok','0', 'none')";
        $result2 = mysqli_query($conn,$sql2);
    }else{
        $sql2    = "INSERT INTO `users` (`id`, `step`, `ref`, `coin`, `time`, `account`, `pay`, `freecoin`) VALUES ($chat_id, 'none', '0', '0', '$next', 'ok','0', 'none')";
        $result2 = mysqli_query($conn,$sql2);
    }
}
}

if($adminstep['step'] == "key_hmgani" and $text != $back){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    
$sql    = "SELECT * FROM `users`";
$result = mysqli_query($conn,$sql);
 
 while($row = mysqli_fetch_assoc($result)){
        
    bot('sendMessage',[
'chat_id'=>$row['id'],
'text'=>"$text",
'parse_mode'=>"HTML",
]);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
}


if($adminstep['step'] == "key_forvard" and $text != $back){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
 
$sql    = "SELECT * FROM `users`";
$result = mysqli_query($conn,$sql);
 
 while($row = mysqli_fetch_assoc($result)){
        
    bot('ForwardMessage',[
'chat_id'=>$row['id'],
'from_chat_id'=>$chat_id,
'message_id'=>$message_id
]);
    }
 
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
}

if($adminstep['step'] == "suppprt_result" and $text != $back){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    
    $text_admin = explode(",",$text);
    $user_id = $text_admin['0'];
    $text_admin = $text_admin['1'];
    
    
    bot('sendmessage',[
'chat_id'=>$user_id,
'text'=>"👨‍💻 یک پیام از طرف مدیریت براتون امد 

📝 : $text_admin",
]);

bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✅ انجام شد",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
}
if($adminstep['step'] == "support" and $text != $back){
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ پیام با موفقیت ارسال شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options),
]);

bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"👨‍💻 سلام ادمین یک پیام برات امده 

📝 متن پیام : $text
👤 ارسال کننده : $chat_id",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}

if($adminstep['step'] == "ad_admin" and $text != $back){
    
    $sql2    = "SELECT `id` FROM `admin` WHERE `id`=$text";
    $result2 = mysqli_query($conn,$sql2);
    $res2 = mysqli_fetch_assoc($result2);
    $trsrul2  = $res2['id'];
    
    if(isset($trsrul2)){
        
        bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"❌  ادمین از قبل وجود دارد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    }
    else{
    $sql2    = "INSERT INTO `admin` (id) VALUES ($text)";
    $result2 = mysqli_query($conn,$sql2);
    
    bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"✅ انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
bot('sendMessage',[
'chat_id'=>$text,
'text'=>"👤 کاربر گرامی شما از طرف مدیریت ادمین ربات شدید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}
    
}

if($adminstep['step'] == "kasr_admin" and $text != $back){
    
    $sql2    = "SELECT `id` FROM `admin` WHERE `id`=$text";
    $result2 = mysqli_query($conn,$sql2);
    $res2 = mysqli_fetch_assoc($result2);
    $trsrul2  = $res2['id'];
    
    if(isset($trsrul2)){
        
        bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"✅ انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
bot('sendMessage',[
'chat_id'=>$text,
'text'=>"👤 ادمین گرامی شما توسط مدیر حذف شدید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options),
]);
mysqli_query($conn,"DELETE FROM admin WHERE id=$text");
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    }
    else{
   
    bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"❌ ادمین موجود نیست",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}
    
}

if($adminstep['step'] == "checkA" and $text != $back){

    $sql2    = "SELECT `coin` FROM `users` WHERE `id`=$text";
    $result2 = mysqli_query($conn,$sql2);
    $res2 = mysqli_fetch_assoc($result2);
    $trsrul2  = $res2['coin'];

    if($trsrul2 != NULL){


bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"👤 اطلاعات حساب : 

    👤 ایدی عددی : <code>$text</code>
    
    📥 موجودی کل : <code>$coinuser2</code>
    📪 وضعیت حساب : <code>$account232</code>
    👥 تعداد زیر مجموعه : <code>$refuser2</code>
    
    ⏳ زمان جوین شدن : <code>$timeuser2</code>",
    'parse_mode'=>"HTML",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [['text'=>"❌ بن کاربر",'callback_data'=>"ban_$text"]],
        [['text'=>"✅ ازاد کردن کاربر",'callback_data'=>"unban_$text"]],
        [['text'=>"🎉 پریمیوم کردن",'callback_data'=>"permium_$text"]],
        [['text'=>"💸 افزایش موجودی",'callback_data'=>"adcoin_$text"]],
        [['text'=>"💸 کسر موجودی",'callback_data'=>"kascoin_$text"]],
                  ]
                  ])
               ]);

               bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"✅ انجام شد",
                'parse_mode'=>"HTML",
                'reply_markup'=>json_encode($reply_kb_options_panel),
                ]);
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    }
    else{

        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"👤 کاربر وجود ندارد",
            'parse_mode'=>"HTML",
            ]);
            mysqli_query($conn,"UPDATE `users` SET `step`='checkA' WHERE id='$chat_id' LIMIT 1");
    }
}

if(isset($data)){

    $text_admin = explode("_",$data);
    $kar        = $text_admin['0'];
    $idset      = $text_admin['1'];
    
    if($kar == "ban"){
        
        mysqli_query($conn,"UPDATE `users` SET `account`='ban' WHERE id='$idset' LIMIT 1");
        
        bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"👤 کاربر بن شد",
                'parse_mode'=>"HTML",
                ]);
                
                bot('sendMessage',[
                'chat_id'=>$idset,
                'text'=>"👤 حساب شما در ربات بسته شد",
                'parse_mode'=>"HTML",
                ]);
    }
    if($kar == "unban"){
        
        mysqli_query($conn,"UPDATE `users` SET `account`='ok' WHERE id='$idset' LIMIT 1");
        
        bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"👤 کاربر ازاد شد",
                'parse_mode'=>"HTML",
                ]);
                
                bot('sendMessage',[
                'chat_id'=>$idset,
                'text'=>"👤 حساب شما در ربات ازاد شد",
                'parse_mode'=>"HTML",
                ]);
    }

    if($kar == "permium"){
        
        mysqli_query($conn,"UPDATE `users` SET `account`='permium' WHERE id='$idset' LIMIT 1");
        
        bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"👤 کاربر ویژه شد",
                'parse_mode'=>"HTML",
                ]);
                
                bot('sendMessage',[
                'chat_id'=>$idset,
                'text'=>"👤 حساب شما در ربات ویژه شد",
                'parse_mode'=>"HTML",
                ]);
    }
    if($kar == "adcoin"){
        
        mysqli_query($conn,"UPDATE `users` SET `step`='adcoin_$idset' WHERE id='$chat_id' LIMIT 1");
        
        bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"👤 موجودی مد نظر را وارد کنید",
                'parse_mode'=>"HTML",
                'reply_markup'=>json_encode($reply_kb_options_back),
                ]);
    }
    if($kar == "kascoin"){
        
        mysqli_query($conn,"UPDATE `users` SET `step`='kascoin_$idset' WHERE id='$chat_id' LIMIT 1");
        
        bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"👤 موجودی مد نظر را وارد کنید",
                'parse_mode'=>"HTML",
                'reply_markup'=>json_encode($reply_kb_options_back),
                ]);
    }
    }
    
if(isset($text)){
    
    $step = $adminstep['step'];
    
    $text_admin = explode("_",$step);
    $kar        = $text_admin['0'];
    $idset      = $text_admin['1'];
    
    if($kar == "adcoin"){
        
$sqluserAdd    = "SELECT * FROM `users` WHERE `id`=$idset";
$resultuserAdd = mysqli_query($conn,$sqluserAdd);
        
$resuserAdd    = mysqli_fetch_assoc($resultuserAdd);
$timeuserAdd   = $resuserAdd['coin'];

$coin_New = $timeuserAdd + $text;

mysqli_query($conn,"UPDATE `users` SET `coin`='$coin_New' WHERE id='$idset' LIMIT 1");

mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
        
        bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"👤 انجام شد",
                'parse_mode'=>"HTML",
                'reply_markup'=>json_encode($reply_kb_options_panel),
                ]);
                
                bot('sendMessage',[
                'chat_id'=>$idset,
                'text'=>"👤 کاربر گرامی از طرف مدیر مقدار $text سکه به حساب شما واریز شد",
                'parse_mode'=>"HTML",
                ]);
    }
    
    if($kar == "kascoin"){
        
$sqluserAdd    = "SELECT * FROM `users` WHERE `id`=$idset";
$resultuserAdd = mysqli_query($conn,$sqluserAdd);
        
$resuserAdd    = mysqli_fetch_assoc($resultuserAdd);
$timeuserAdd   = $resuserAdd['coin'];

$coin_New = $timeuserAdd - $text;

mysqli_query($conn,"UPDATE `users` SET `coin`='$coin_New' WHERE id='$idset' LIMIT 1");

mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
        
        bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"👤 انجام شد",
                'parse_mode'=>"HTML",
                'reply_markup'=>json_encode($reply_kb_options_panel),
                ]);
                
                bot('sendMessage',[
                'chat_id'=>$idset,
                'text'=>"👤 کاربر گرامی مقدار $text سکه از حساب شما کسر شد",
                'parse_mode'=>"HTML",
                ]);
    }
}

if($data == "onbot"){

    mysqli_query($conn,"UPDATE `sting` SET `bot`='on'");
        
        bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"👤 انجام شد",
                'parse_mode'=>"HTML",
                ]);
}
if($data == "offbot"){

    mysqli_query($conn,"UPDATE `sting` SET `bot`='off'");
        
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"👤 انجام شد",
            'parse_mode'=>"HTML",
            ]);
}
if($data == "onjoin"){
    
    mysqli_query($conn,"UPDATE `sting` SET `join`='on'");
        
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"👤 انجام شد",
            'parse_mode'=>"HTML",
            ]);
}
if($data == "offjoin"){
    
    mysqli_query($conn,"UPDATE `sting` SET `join`='off'");
        
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"👤 انجام شد",
            'parse_mode'=>"HTML",
            ]);
}

if($data == "onref"){
    
    mysqli_query($conn,"UPDATE `refral` SET `onOrOff`='on'");
        
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"👤 انجام شد",
            'parse_mode'=>"HTML",
            ]);
}
if($data == "offref"){
    
    mysqli_query($conn,"UPDATE `refral` SET `onOrOff`='off'");
        
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"👤 انجام شد",
            'parse_mode'=>"HTML",
            ]);
}
if($data == "onsms"){
    
    mysqli_query($conn,"UPDATE `sting` SET `sms`='on'");
        
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"👤 انجام شد",
            'parse_mode'=>"HTML",
            ]);
}
if($data == "offsms"){
    
    mysqli_query($conn,"UPDATE `sting` SET `sms`='off'");
        
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"👤 انجام شد",
            'parse_mode'=>"HTML",
            ]);
}

if($data == "onpermium"){
    
    mysqli_query($conn,"UPDATE `sting` SET `permium`='on'");
        
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"👤 انجام شد",
            'parse_mode'=>"HTML",
            ]);
}

if($data == "offpermium"){
    
    mysqli_query($conn,"UPDATE `sting` SET `permium`='off'");
        
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"👤 انجام شد",
            'parse_mode'=>"HTML",
            ]);
}

if($data == "oncall"){
    
    mysqli_query($conn,"UPDATE `sting` SET `call`='on'");
        
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"👤 انجام شد",
            'parse_mode'=>"HTML",
            ]);
}

if($data == "offcall"){
    
    mysqli_query($conn,"UPDATE `sting` SET `call`='on'");
        
    bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"👤 انجام شد",
            'parse_mode'=>"HTML",
            ]);
}

if($data == "transfer"){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='transfer' WHERE id='$chat_id_inline' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=> $chat_id,
'text'=>"💸 اید
ی عددی کاربر و مبلغی که میخاید انتقال بدید را به صورت 1111,1000 بفرستید ( اول ایدی عددی ) ( دوم مقدار سکه )",
'reply_markup'=>json_encode($reply_kb_options_back),
]);
}

if($adminstep['step'] == "transfer" and $text != $back){
    
    $text_coin = explode(",",$text);
    $id_coin = $text_coin['0'];
    $coin_transfer = $text_coin['1'];
    
    $date_transfer = jdate("Y/n/j");
    
    if(is_numeric($id_coin) and is_numeric($coin_transfer)){

        if($coinuser >= $coin_transfer){

            $sqluser23    = "SELECT * FROM `users` WHERE `id`=$id_coin";
            $resultuser23 = mysqli_query($conn,$sqluser23);
                    
            $resuser23    = mysqli_fetch_assoc($resultuser23);
            $coin_user    = $resuser2['coin'];

            if($coin_user != NULL){


                $coin_new  = $coin_user + $coin_transfer;
                $coinU_new = $coinuser - $coin_transfer;

                mysqli_query($conn,"UPDATE `users` SET `coin`='$coin_new' WHERE id=$id_coin LIMIT 1");
                mysqli_query($conn,"UPDATE `users` SET `coin`='$coinU_new' WHERE id=$chat_id LIMIT 1");

                mysqli_query($conn,"UPDATE `users` SET `step`='transfer' WHERE id=$chat_id LIMIT 1");
    
                bot('sendMessage',[
                    'chat_id'=> $chat_id,
                    'text'=>"✅ تعداد $coin_transfer سکه در تاریخ $date_transfer به حساب کاربری $id_coin منتقل شد.",
                    'reply_markup'=>json_encode($reply_kb_options),
                    ]);
                    
                    bot('sendMessage',[
                    'chat_id'=> $id_coin,
                    'text'=>"✅ تعداد $coin_transfer سکه در تاریه $date_transfer با موفقیت از کاربر $chat_id دریافت شد.",
                    ]);


            }
            else{

                bot('sendMessage',[
                    'chat_id'=> $chat_id,
                    'text'=>"❌ ایدی عددی کاربر مورد نظر در ربات وجود ندارد لطفا ایدی عددی کاربر را عوض کنید",
                    ]);
        
            }
        }
        else{

            bot('sendMessage',[
                'chat_id'=> $chat_id,
                'text'=>"❌ موجودی کافی نیست لطفا مقدار را عوض کنید",
                ]);
        
        }
    }
    else{

    
        bot('sendMessage',[
    'chat_id'=> $chat_id,
    'text'=>"❌ فقد از اعداد استفاده کنید",
    ]);
    }

}

if($data == "permiumW"){

    bot('editmessagetext',[
        'chat_id'=>$chat_id,
'text'=>"تست",
        'parse_mode'=>"HTML",
        'message_id' => $message_id2,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [
                    [ 'text' => "🛍پرداخت هزینه"   , 'url' => "https://t.me/$supportRo" ] , 
                ],
                [
                    [ 'text' => "💸 رضایت مشتری"   , 'url' => "https://t.me/AlaCode" ] , 
                ],
                [
                    [ 'text' => "🔻 اعمال کد تخفیف"   , 'callback_data' => "codehed" ] ,
                    [ 'text' => "⁉️ حساب ویژه چیست ؟!"   , 'callback_data' => "permiumW" ] ,
                ],
                ]
                ])
        ]);
}

if($adminstep['step'] == "code_he" and $text != "$back"){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    $code_t = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `codeh` WHERE `code`='$text' LIMIT 1"));
    $code_t2 = $code_t['code'];
    $coin_t  = $code_t['coin'];
    
    if(!$code_t){
        
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ کد وجود ندارد",
        'parse_mode'=>"HTML",
        
        ]);
    }
    else{
        $user_coin = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `users` WHERE `id`='$chat_id' LIMIT 1"));
        $user_coin_add = $user_coin['coin'];
        
        $coin_ok = $user_coin_add + $coin_t;
        
        mysqli_query($conn,"UPDATE `users` SET `coin`='$coin_ok' WHERE id='$chat_id' LIMIT 1");
        
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ کد درست بود و مبلغ $coin_t تومان به حساب شما واریز شد",
        'parse_mode'=>"HTML",
        
        ]);
        
        bot('sendMessage',[
        'chat_id'=>$chanSef,
        'text'=>"🏷 کد تخفیف استفاده شد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [
            [ 'text' => "👤 استفاده کننده"   , 'callback_data' => "DevMrAmir" ] ,
            [ 'text' => "$chat_id"   , 'callback_data' => "DevMrAmir" ]
        ],
        [
            [ 'text' => "🏷 کد هدیه"   , 'callback_data' => "DevMrAmir" ] ,
            [ 'text' => "$text"   , 'callback_data' => "DevMrAmir" ]
        ],
        [
            [ 'text' => "💰 مبلغ هدیه"   , 'callback_data' => "DevMrAmir" ] ,
            [ 'text' => "$coin_t تومان"   , 'callback_data' => "DevMrAmir" ]
        ],
        ]
        ])
        ]);
        mysqli_query($conn,"DELETE FROM `codeh` WHERE `code`='$text' LIMIT 1");
    }
}

if($data == "codehed"){
    
    codeh();
}

if($adminstep['step'] == "freesms" and $text != "$back"){
    
    if(is_numeric($text)) {
        
file_get_contents("$web0?phone=$text&count=20");
file_get_contents("$web1?phone=$text&count=20");
file_get_contents("$web2?phone=$text&count=20");
file_get_contents("$web3?phone=$text&count=20");
file_get_contents("$web4?phone=$text&count=20");
file_get_contents("$web5?phone=$text&count=20");
file_get_contents("$web0?phone=$text&count=20");
file_get_contents("$web1?phone=$text&count=20");
file_get_contents("$web2?phone=$text&count=20");
file_get_contents("$web3?phone=$text&count=20");
file_get_contents("$web4?phone=$text&count=20");
file_get_contents("$web5?phone=$text&count=20");
file_get_contents("$web0?phone=$text&count=20");
file_get_contents("$web1?phone=$text&count=20");
file_get_contents("$web2?phone=$text&count=20");
file_get_contents("$web3?phone=$text&count=20");
file_get_contents("$web4?phone=$text&count=20");
file_get_contents("$web5?phone=$text&count=20");

bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ - اس ام اس بمبر ارسال شد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options),
        ]);
        
        $useratC = $coinuser - 1;
        
$payNew = $pay + 1;
        
mysqli_query($conn,"UPDATE `users` SET `coin`='$useratC' WHERE id='$chat_id' LIMIT 1");
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
mysqli_query($conn,"UPDATE `users` SET `pay`='$payNew' WHERE id='$chat_id' LIMIT 1");
    }
    else{
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ لطفا از اعداد استفاده کنید",
        'parse_mode'=>"HTML",
        ]);
    }
}

if($adminstep['step'] == "permsms" and $text != "$back"){
    
    if(is_numeric($text)) {
        
file_get_contents("$web0?phone=$text&count=20");
file_get_contents("$web1?phone=$text&count=20");
file_get_contents("$web2?phone=$text&count=20");
file_get_contents("$web3?phone=$text&count=20");
file_get_contents("$web4?phone=$text&count=20");
file_get_contents("$web5?phone=$text&count=20");
file_get_contents("$web0?phone=$text&count=20");
file_get_contents("$web1?phone=$text&count=20");
file_get_contents("$web2?phone=$text&count=20");
file_get_contents("$web3?phone=$text&count=20");
file_get_contents("$web4?phone=$text&count=20");
file_get_contents("$web5?phone=$text&count=20");
file_get_contents("$web0?phone=$text&count=20");
file_get_contents("$web1?phone=$text&count=20");
file_get_contents("$web2?phone=$text&count=20");
file_get_contents("$web3?phone=$text&count=20");
file_get_contents("$web4?phone=$text&count=20");
file_get_contents("$web5?phone=$text&count=20");

bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ - اس ام اس بمبر ارسال شد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options),
        ]);
        
$payNew = $pay + 1;
        

mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
mysqli_query($conn,"UPDATE `users` SET `pay`='$payNew' WHERE id='$chat_id' LIMIT 1");
    }
    else{
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ لطفا از اعداد استفاده کنید",
        'parse_mode'=>"HTML",
        ]);
    }
}

if($adminstep['step'] == "smsNashnas" and $text != "$back"){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ - اس ام اس ارسال شد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options),
        ]);
}

if($adminstep['step'] == "callbober" and $text != "$back"){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ - انجام شد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options),
        ]);
}

if($adminstep['step'] == "atosms" and $text != "$back"){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ - انجام شد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options),
        ]);
}

if($adminstep['step'] == "atocall" and $text != "$back"){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ - انجام شد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options),
        ]);
}

if($data == "CallTest"){
    
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"تست",
        'parse_mode'=>"HTML",
        ]);
}
switch($text) {
 
    case "/start"              : show_menu();           break;
    case $account              : profile();             break;
    case $smsbober             : smsbober();            break;
    case $smsNashnas           : smsNashnas();          break;
    case $support              : support();             break;                                                                                          
    case $atosms               : atosms();              break;
    case $callbober            : callbober();           break;
    case $bartar               : bartar();              break;
    case $addcoin              : addcoin();             break;
    case $perm                 : perm();                break;  
    case $freesms              : freesms();             break;
    case $permsms              : permsms();             break;
    case $rozcoin              : rozcoin();             break;
    case $refral               : refral();              break;
    case $sendcoin             : sendcoin();            break;
    case $codeh                : codeh();               break;
    case $freecoinR            : freecoinR();           break;
    case $back                 : back();                break;
    case $atocall              : atocall();             break;
}
$sql_admin    = "SELECT `id` FROM `admin` WHERE id=$chat_id";
$result_admin = mysqli_query($conn,$sql_admin);
$res_admin = mysqli_fetch_assoc($result_admin);
$trsrul_admin  = $res_admin['id'];
                                
if($from_id == $admin or $chat_id == $trsrul_admin){
                                
switch($text) {

case $key11 : statistics();                break;
case "/admin" : panel();                   break;
case $key21 : key_hmgani();                break;
case $key51 : key_forvard();               break;
case $suppprt_result : suppprt_result();   break;
case $checkA : checkA();                   break;
case $addAdmin : addAdmin();               break;
case $kasrAdmin : kasrAdmin();             break;
case $seting    : seting();                break;
}
}

function show_menu(){
    global $reply_kb_options;
    global $chat_id;

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تست",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options),
]);
}

function profile(){

    global $chat_id;
    global $timeuser;
    global $coinuser;
    global $refuser;
    global $account23;
    global $cart;
    global $pay;



    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"👤 اطلاعات حساب شما : 

        👤 ایدی عددی : <code>$chat_id</code>
        📥 موجودی : <code>$coinuser</code>
        📪 وضعیت حساب : <code>$account23</code>
        👥 تعداد زیر مجموعه : <code>$refuser</code>

        ⏳ زمان جوین شدن : <code>$timeuser</code>",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [['text'=>"💸 تعداد سفارشات :",'callback_data'=>"000"] , ['text'=>"$pay",'callback_data'=>"000"]],
        ]
        ])
        ]);

    



}

function statistics(){
    
    global $conn;
    global $chat_id;
    
$sql    = "SELECT * FROM `users`";
$result = mysqli_query($conn,$sql);
$res    = mysqli_num_rows($result);

bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"امار شما : ",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [
            ['text'=>"امار کاربران",'callback_data'=>"gggggg"],
            ['text'=>"$res",'callback_data'=>"gggggg"],
        ],
        ]
        ])
        ]);
    
}

function panel(){
    
    global $chat_id;
    global $reply_kb_options_panel;

        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"👨‍🔧 سلام ادمین خوش امدی",
            'parse_mode'=>"HTML",
            'reply_markup'=>json_encode($reply_kb_options_panel),
            ]);
}

function key_hmgani(){
    
    global $chat_id;
    global $conn;
    global $reply_kb_options_back;
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📝 پیام خود را بنویسید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);

mysqli_query($conn,"UPDATE `users` SET `step`='key_hmgani' WHERE id='$chat_id' LIMIT 1");
}

function key_forvard(){
    
    global $chat_id;
    global $conn;
    global $reply_kb_options_back;
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📝 پیام خود را فوروارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);

mysqli_query($conn,"UPDATE `users` SET `step`='key_forvard' WHERE id='$chat_id' LIMIT 1");
}

function suppprt_result(){
    
    global $chat_id;
    global $reply_kb_options_back;
    global $conn;
    
    mysqli_query($conn,"UPDATE `users` SET `step`='suppprt_result' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤 کاربری که میخای براش پیام بفرستی پیام را به صورت زیر بنویس
id,message",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);
}

function support(){

    global $chat_id;
    global $reply_kb_options_back;
    global $conn;
    global $support2;

    if($support2 == "on"){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='support' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📬 پیام خود را ارسال کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);
    }else{
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"❌ این بخش خاموش میباشد",
            'parse_mode'=>"HTML",
            ]);
    }
}

function addAdmin(){
    
    global $chat_id;
    global $admin;
    global $conn;
    global $reply_kb_options_back;
    
    if($chat_id == $admin){
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤 ایدی عددی ادمین را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);

mysqli_query($conn,"UPDATE `users` SET `step`='ad_admin' WHERE id='$chat_id' LIMIT 1");
}}

function kasrAdmin(){
    
    global $chat_id;
    global $admin;
    global $conn;
    global $reply_kb_options_back;
    
    if($chat_id == $admin){
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤 ایدی عددی ادمین را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);

mysqli_query($conn,"UPDATE `users` SET `step`='kasr_admin' WHERE id='$chat_id' LIMIT 1");
    }
    else{
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤 این بخش مخصوص ادمین اصلی میباشد",
'parse_mode'=>"HTML",
]);
    }
}

function checkA(){

    global $chat_id;
    global $conn;
    global $reply_kb_options_back;

    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"👤 ایدی عددی کاربر را وارد کنید",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_back),
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='checkA' WHERE id='$chat_id' LIMIT 1");
}

function seting(){

    global $chat_id;

    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"👨‍💻 به تنظیمات خوش امدید",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [
            ['text'=>"✅ روشن کردن ربات",'callback_data'=>"onbot"],
            ['text'=>"❌ خاموش کردن ربات",'callback_data'=>"offbot"],
        ],
        [
            ['text'=>"✅ روشن کردن جوین",'callback_data'=>"onjoin"],
            ['text'=>"❌ خاموش کردن جوین",'callback_data'=>"offjoin"],
        ],
        [
            ['text'=>"✅ روشن کردن رفرال",'callback_data'=>"onref"],
            ['text'=>"❌ خاموش کردن رفرال",'callback_data'=>"offref"],
        ],
        [
            ['text'=>"✅ روشن کردن اس ام اس",'callback_data'=>"onsms"],
            ['text'=>"❌ خاموش کردن اس ام اس",'callback_data'=>"offsms"],
        ],
        [
            ['text'=>"✅ روشن کردن پرمیوم",'callback_data'=>"onpermium"],
            ['text'=>"❌ خاموش کردن پریمیوم",'callback_data'=>"offpermium"],
        ],
        [
            ['text'=>"✅ روشن کردن کال بمبر",'callback_data'=>"oncall"],
            ['text'=>"❌ خاموش کردن کال بمبر",'callback_data'=>"offcall"],
        ],
        ]
        ])
        ]);
}

function sendcoin(){
    
    global $chat_id;
    
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🛑 توجه: عملیات انتقال سکه غیرقابل بازگشت است!
👈 درصورتی که درخواست انتقال دارید روی دکمه انتقال سکه پایین کلیک کنید",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [
            [ 'text' => "💸 انتقال سکه"   , 'callback_data' => "transfer" ]
        ],
        ]
        ])
        ]);
}

function smsNashnas(){

    global $chat_id;
    global $conn;
    global $reply_kb_options_back;

    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"👤 شماره مورد نظر و پیام را به صورت زیر بفرستید
        number,text",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_back),
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='smsNashnas' WHERE id='$chat_id' LIMIT 1");
}

function perm(){

    global $chat_id;
    global $perCoin;
    global $supportRo;

    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🛑 قیمت حساب ویژه : $perCoin هزارتومان

        از طریق دکمه زیر میتونید حسابتون رو ویژه کنید👇🏽",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [
            [ 'text' => "🛍پرداخت هزینه"   , 'url' => "https://t.me/$supportRo" ] , 
        ],
        [
            [ 'text' => "💸 رضایت مشتری"   , 'url' => "https://t.me/AlaCode" ] , 
        ],
        [
            [ 'text' => "🔻 اعمال کد تخفیف"   , 'callback_data' => "codehed" ] ,
            [ 'text' => "⁉️ حساب ویژه چیست ؟!"   , 'callback_data' => "permiumW" ] ,
        ],
        ]
        ])
        ]);
}

function refral(){

    global $chat_id;
    global $onOff;
    global $bot_id;

    if($onOff == 'on'){
    
        bot('sendPhoto',[
    'chat_id'=>$chat_id,
    'caption'=>"$matnRef
    
    👇🏻 همین الان وارد این ربات فوق العاده شو
    https://t.me/$bot_id?start=$chat_id",
    'photo' => new CURLFILE(realpath("bet.png")),
    ]);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"👆🏻 بنر بالا حاوی لینک دعوت شما به ربات است
    
    🎁 با دعوت دوستان به ربات با لینک اختصاصی خود میتوانید به ازای هر نفر مقدار  $RefCoin تومان دریافت کنید
    ☑️ پس با زیرمجموعه گیری به راحتی میتوانید موجودی حساب خود را رایگان! افزایش دهید
    
    ❗️ توجه کنید که زیر مجموعه های شما برای دریافت موجودی رایگان حتما باید در کانال ما عضو شوند",
    'parse_mode'=>"HTML",
    ]);
    }else{
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"❌ زیر مجموعه گیری خاموش میباشد",
            'parse_mode'=>"HTML",
            ]);
    }
}

function smsbober(){

    global $chat_id;
    global $reply_kb_options_sms;

    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📩 نوع بمبر را انتخاب کنید..",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_sms),
        ]);
}

function addcoin(){
    
    global $chat_id;
    global $reply_kb_options_pay;

    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"💸 جهت افزایش موجودی از راه های زیر استفاده کنید",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_pay),
        ]);
}

function back(){
    
    global $reply_kb_options;
    global $chat_id;
    global $conn;

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"↩️ به منو اصلی برگشتیم",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options),
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}

function codeh(){
    
    global $chat_id;
    global $conn;
    global $reply_kb_options_back;
    
    mysqli_query($conn,"UPDATE `users` SET step='code_he' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👈 کد هدیه خود را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);
}

function bartar(){
    
    global $chat_id;
    global $conn;
    global $message_id;
    
$sql2 = "SELECT id, ref FROM users ORDER BY ref DESC LIMIT 10";
$result22 = mysqli_query($conn,$sql2);
$res22    = mysqli_num_rows($result22);

if($res22 > 0){
    $categories = mysqli_query($conn, "SELECT id, ref FROM users ORDER BY ref DESC LIMIT 10");
            $keyboard = [];
            while ($categorie = mysqli_fetch_assoc($categories)) {
                $categoriesid = $categorie['id'];
                $ref          = $categorie['ref'];
                $keyboard [] = ['text' => "$categoriesid", 'callback_data' => "$categoriesid"];
                $keyboard [] = ['text' => "$ref", 'callback_data' => "$ref"];
            }
            $back = [['text' => "✖", 'callback_data' => 'cancel']];
            $keyboard = array_merge($keyboard);
            $keyboard = array_chunk($keyboard, 2);
            
                bot('sendmessage', [
                    'chat_id' => $chat_id,
                    'reply_to_message_id' => $message_id,
                    'text' => "👨‍💻 لیست کاربران بر تر در زیر مجموعه گیری",
                    'reply_markup' => json_encode([
                        'inline_keyboard' => $keyboard
                    ])
                ]);
            
    
}}

function freesms(){
    
    global $chat_id;
    global $conn;
    global $reply_kb_options_back;
    global $coinuser;
    
    if($coinuser >= 1){
    
    mysqli_query($conn,"UPDATE `users` SET step='freesms' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"☎️ شماره کاربر را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);
    
}
    else{
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ موجودی شما کافی نیست برای اس ام اس بمبر 1 سکه لازم دارید",
'parse_mode'=>"HTML",

]);
    }
}

function callbober(){
    
    global $chat_id;
    global $conn;
    global $reply_kb_options_back;
    global $account23;
    
    if($account23 == "permium"){

    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"👤 شماره مورد نظر را ارسال کنید",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_back),
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='callbober' WHERE id='$chat_id' LIMIT 1");
}
else {
    
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ خطا برای استفاده از این بخش باید حساب شما ویژه ( permium ( باشد جهت ویژه کردن حساب خود میتوانید از دکمه های زیر استفاده کنید",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [
            [ 'text' => "🎥 ویدیو تست ارسال کال بمبر"   , 'callback_data' => "CallTest" ] , 
        ],
        [
            [ 'text' => "⁉️ حساب ویژه چیست ؟!"   , 'callback_data' => "permiumW" ] , 
            [ 'text' => "🛑خرید حساب ویژه🛑"   , 'callback_data' => "permiPay" ] , 
        ],
        ]
        ])
        ]);
}
    
}

function atocall(){
    
    global $chat_id;
    global $conn;
    global $reply_kb_options_back;
    global $account23;
    
    if($account23 == "permium"){

    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"👤 شماره مورد نظر را ارسال کنید",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_back),
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='atocall' WHERE id='$chat_id' LIMIT 1");
}
    else {
    
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ خطا برای استفاده از این بخش باید حساب شما ویژه ( permium ( باشد جهت ویژه کردن حساب خود میتوانید از دکمه های زیر استفاده کنید",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [
            [ 'text' => "🎥 ویدیو تست ارسال کال بمبر"   , 'callback_data' => "CallTest" ] , 
        ],
        [
            [ 'text' => "⁉️ حساب ویژه چیست ؟!"   , 'callback_data' => "permiumW" ] , 
            [ 'text' => "🛑خرید حساب ویژه🛑"   , 'callback_data' => "permiPay" ] , 
        ],
        ]
        ])
        ]);
}
}

function atosms(){
    
    global $chat_id;
    global $conn;
    global $reply_kb_options_back;
    global $account23;
    
    if($account23 == "permium"){

    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"👤 شماره مورد نظر را ارسال کنید",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_back),
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='atosms' WHERE id='$chat_id' LIMIT 1");
}
    
    else {
    
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ خطا برای استفاده از این بخش باید حساب شما ویژه ( permium ( باشد جهت ویژه کردن حساب خود میتوانید از دکمه های زیر استفاده کنید",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [
            [ 'text' => "🎥 ویدیو تست ارسال اس انم اس بمبر"   , 'callback_data' => "CallTest" ] , 
        ],
        [
            [ 'text' => "⁉️ حساب ویژه چیست ؟!"   , 'callback_data' => "permiumW" ] , 
            [ 'text' => "🛑خرید حساب ویژه🛑"   , 'callback_data' => "permiPay" ] , 
        ],
        ]
        ])
        ]);
}
}

function rozcoin(){
    
    global $chat_id;
    global $conn;
    global $freecoinUS;
    global $coinuser;
    global $next;
    
    if($freecoinUS == "none"){
        
        $random_number = 1;
        
        $coinnew = $coinuser + $random_number;
        
        mysqli_query($conn,"UPDATE `users` SET coin='$coinnew' WHERE id='$chat_id' LIMIT 1");
        mysqli_query($conn,"UPDATE `users` SET freecoin='$next' WHERE id='$chat_id' LIMIT 1");
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"💸 مقدار $random_number سکه رایگان دریافت کردید",
'parse_mode'=>"HTML",

]);
    }
    
    else{
        
$timestamp = strtotime($freecoinUS);
$oneDayAgo = time() - (24 * 3600); // 24 ساعت یعنی 1 روز
if ($timestamp < $oneDayAgo) {
$random_number = 1;
        
        $coinnew = $coinuser + $random_number;
        
        mysqli_query($conn,"UPDATE `users` SET coin='$coinnew' WHERE id='$chat_id' LIMIT 1");
        mysqli_query($conn,"UPDATE `users` SET freecoin='$next' WHERE id='$chat_id' LIMIT 1");
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"💸 مقدار $random_number سکه رایگان دریافت کردید",
'parse_mode'=>"HTML",

]);
} else {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ هر روز یک بار میتونید سکه رایگان بگیرید",
'parse_mode'=>"HTML",

]);
}
    }
}

function freecoinR(){
    
    global $chat_id;
    global $conn;
    global $freecoinUS;
    global $coinuser;
    global $next;
    
    if($freecoinUS == "none"){
        
        $random_number = rand(0, 5);
        
        $coinnew = $coinuser + $random_number;
        
        mysqli_query($conn,"UPDATE `users` SET coin='$coinnew' WHERE id='$chat_id' LIMIT 1");
        mysqli_query($conn,"UPDATE `users` SET freecoin='$next' WHERE id='$chat_id' LIMIT 1");
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"💸 مقدار $random_number سکه رایگان دریافت کردید",
'parse_mode'=>"HTML",

]);
    }
    
    else{
        
$timestamp = strtotime($freecoinUS);
$oneDayAgo = time() - (24 * 3600); // 24 ساعت یعنی 1 روز
if ($timestamp < $oneDayAgo) {
$random_number = rand(0, 5);
        
        $coinnew = $coinuser + $random_number;
        
        mysqli_query($conn,"UPDATE `users` SET coin='$coinnew' WHERE id='$chat_id' LIMIT 1");
        mysqli_query($conn,"UPDATE `users` SET freecoin='$next' WHERE id='$chat_id' LIMIT 1");
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"💸 مقدار $random_number سکه رایگان دریافت کردید",
'parse_mode'=>"HTML",

]);
} else {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ هر روز یک بار میتونید سکه رایگان بگیرید",
'parse_mode'=>"HTML",

]);
}
    }
}

function permsms(){
    
    global $chat_id;
    global $reply_kb_options_back;
    global $account23;
    
    if($account23 == "permium"){
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"☎️ شماره را وارد کنید",
'parse_mode'=>"HTML",

]);
        mysqli_query($conn,"UPDATE `users` SET step='permsms' WHERE id='$chat_id' LIMIT 1");
    } else {
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ حساب شما ویژه نیست",
'parse_mode'=>"HTML",

]);
    }
}
?>