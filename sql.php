<?php
$db = mysql_connect("localhost", "root", "")or die("НЕ подключено!!!");
	mysql_select_db("count_like",$db);
	mysql_query("SET NAMES 'utf8'");

$profile_picture = $_POST['profile_picture'];
$profile_picture = htmlspecialchars($profile_picture);
$profile_picture = mysql_real_escape_string($profile_picture);
$full_name = $_POST['full_name'];
$full_name = htmlspecialchars($full_name);
$full_name = mysql_real_escape_string($full_name);
$likes = $_POST['likes'];
$likes = htmlspecialchars($likes);
$likes = mysql_real_escape_string($likes);
$comments = $_POST['comments'];
$comments = htmlspecialchars($comments);
$comments = mysql_real_escape_string($comments);
$access_token = $_POST['access_token'];
$access_token = htmlspecialchars($access_token);
$access_token = mysql_real_escape_string($access_token);
$user = mysql_fetch_array(mysql_query("SELECT * FROM `users` WHERE `full_name`='$full_name'"));
if($user == false){
    $result = mysql_query("INSERT INTO `users`(`profile_picture`, `full_name`, `likes`, `comments`, `access_token`) VALUES ('$profile_picture','$full_name','$likes','$comments','$access_token')", $db);

}else{
    mysql_query("UPDATE `users` SET likes = '".$likes."', comments = '".$comments."' WHERE full_name = '".$full_name."'");
}
mysql_close($db);
exit();
?>