<?php 
// $str1= "3305422818,3119117623";
// $str2="fawad,bacha"
// foreach(explode(",",$str) as $phone){
// 	$x="92".$phone;
// 	echo '<br>'.$x;


$username = "923119117623";
$password = "kasehojanab";
$sender = 27811;
$url = "https://drive.google.com/file/d/18rwDVwkwhfx7JR3XVPI4_Xe346QASR82/view?usp=sharing";
$message = "Dear Parents!Your Son #B# Got #C# Marks In #D#, Your Son Result Is #E# Please Contact With School Principle For More Details.";
$url = "https://sendpk.com/api/personalised.php?username=".$username."&password=".$password."&sender=".urlencode($sender)."&url=".$url."&message=".urlencode($message)."&format=json";

$ch = curl_init();
$timeout = 50;
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
$responce = curl_exec($ch);
curl_close($ch);
/*Print Responce*/
echo $responce;
