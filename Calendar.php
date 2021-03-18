<?php
class Calendar{
public function showday($day,$month){ 
//Our YYYY-MM-DD date string.
$date = "2021-$day-$month";
//Get the day of the week using PHP's date function.
$dayOfWeek = date("l", strtotime($date));
//Print out the day that our date fell on.
echo $date . ' เป็นวัน ' . $dayOfWeek;
return $dayOfWeek;
    }
}