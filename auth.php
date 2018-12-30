<?php 
$array[''];

$res = file_get_contents('https://api.instagram.com/v1/users/2068884637/media/recent/?client_id=01e9a9797a45457db450eac2e2989036&access_token=2068884637.01e9a97.5f7ce8dd28534ec5bc0c63d7e5a10503');

$res = json_decode($res, true);

echo "<pre>";
print_r($res);
?>