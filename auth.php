<?php 
$array[''];

$client_id    = '01e9a9797a45457db450eac2e2989036';
$access_token = 'ACCESS_TOKEN';
$user_id      = 'user_id'; // Цифры идущие до первой точки в ACCESS_TOKEN

$res = file_get_contents('https://api.instagram.com/v1/users/' . $user_id . '/media/recent/?client_id=
' . $client_id . '&access_token=' . $access_token . '&count=5');

$res = json_decode($res, true);
if (!empty($res['data'])) {
    //var_dump($res['data']);

    foreach($res['data'] as $row) {
        // Можно вывести фото на странице:
        echo '<img src="' . $row['images']['standard_resolution']['url'] . '">';

        // Или сохранить файл на сервере:
        $url = $row['images']['standard_resolution']['url'];
        $url = explode('?', $url);
        $ext = mb_strtolower(mb_substr(mb_strrchr($url[0], '.'), 1));
        $file = $row['id'] . '.' . $ext;
        copy($row['images']['standard_resolution']['url'], __DIR__ . '/instagram/' . $file);
    }
}

?>