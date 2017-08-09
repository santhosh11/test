<?php
include("../controller/dbconnect_mysql.php");
print_r($_POST);exit;
if(isset($_POST['name'])){
  $column=$_POST['name'];
  $new_value=$_POST['value'];
  $id=$_POST['pk'];
  $sql="update `app_users` set $column='$new_value' where id=$id";
  mysqli_query($conn,$sql);
}
?>