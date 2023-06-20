<?php

// ------- Sql Code -------
include("config.php");

mysqli_multi_query(
    $conn,
    "CREATE TABLE `users` (
        `id` bigint PRIMARY KEY,
        `step` text,
        `time` text,
        `coin` text,
        `ref` text,
        `account` text,
        `pay` text,
        `freecoin` text
        ) default charset = utf8mb4;
        CREATE TABLE `refral` (
        `onOrOff` text,
        `coin` text
        ) default charset = utf8mb4;
        CREATE TABLE `admin` (
        `id` bigint PRIMARY KEY
        ) default charset = utf8mb4;
        CREATE TABLE `sting` (
        `bot` text,
        `join` text,
        `support` text,
        `permium` text,
        `sms` text,
        `call` text
        ) default charset = utf8mb4;
        CREATE TABLE `codeh` (
        `code` text,
        `coin` text
        ) default charset = utf8mb4;
        CREATE TABLE `chanel` (
        `chanel1` text,
        `chanel2` text,
        `chanel3` text,
        `chanel4` text
        ) default charset = utf8mb4;");
    if(mysqli_connect_errno()){
    echo "به دلیل مشکل زیر، اتصال برقرار نشد : <br />" . mysqli_connect_error();
    die();
}else{
echo "دیتابیس متصل و نصب شد .";

            
            
            
            
            
}

?>