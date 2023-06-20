<?php

$date = '2023/04/27';
$timestamp = strtotime($date);
$oneDayAgo = time() - (24 * 3600); // 24 ساعت یعنی 1 روز
if ($timestamp < $oneDayAgo) {
    echo "یک روز از تاریخ مشخص شده گذشته است";
} else {
    echo "هنوز یک روز از تاریخ مشخص شده گذشته نشده است";
}

?>