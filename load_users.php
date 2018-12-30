<?
$mysqli = new mysqli("localhost", "root", "","count_like");
$mysqli->query("SET NAMES 'utf8'");
$result_set = $mysqli->query("SELECT * FROM users ORDER BY id DESC LIMIT 3");
$mysqli->close();
while(($row = $result_set->fetch_assoc()) != false){
echo "                       
<div class='col-4'>
    <div class='users_item d-flex justify-content-center flex-column align-items-center'>
        <img src=".$row[profile_picture]." alt='' class='w-50 rounded-circle text-center'>
        <span class='number'>$row[likes]</span>
    </div>
</div>
";
}



?>
