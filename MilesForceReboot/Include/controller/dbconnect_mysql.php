<?php 


date_default_timezone_set('Asia/Calcutta');

function dbConnect(){
 $server='localhost';
 $user_name='root';
 $user_password='';
 $db='amazon_s3_bkp';  
$link = mysqli_connect($server, $user_name, $user_password, $db);
return $link;
}
$conn = dbConnect();
?>