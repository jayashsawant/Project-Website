<?php 

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'registration');

$name = $_POST['name'];
$pass = $_POST['password'];

$s ="select * from usertable where name ='$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num =mysqli_num_rows($result);
if($num == 1){
  $_SESSION['loginname'] = $name; 
   header('location:shop.php');
   
}
else{
    $_SESSION['status1']= "Wrong Username or Password!";
    header("location:bar.php");
   
}

?>


