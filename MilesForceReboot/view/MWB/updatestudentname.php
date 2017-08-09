<?php
include("../controller/dbconnect_mysql.php");
if(isset($_POST['name'])){
  $column=$_POST['name'];
  $new_value=$_POST['value'];
   $firstname = "";
   $lastname = "";
  if(is_array($new_value)){
       $firstname = $new_value["firstname"];
       $lastname = $new_value["lastname"];
  }
  $id=$_POST['pk'];
  $sql="update `app_users` set txt_Fname ='$firstname',txt_Lname='$lastname' where id=$id";
  mysqli_query($conn,$sql);
}
?>