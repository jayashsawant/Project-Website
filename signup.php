
<?php 

session_start();
header('location:bar.php');
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'registration');

$name = $_POST['name'];
$pass = $_POST['password'];
$email = $_POST['email'];

$s ="select * from usertable where name ='$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['status1']= "OOPS! User Name Already Taken";
    header("location:bar.php");
}
else{
    $reg = "insert into usertable(name,  password , email) values ('$name', '$pass', '$email')";
    mysqli_query($con, $reg);
    // echo" SIGN-IN SUCCESFULL";
    $_SESSION['status1']= "HI! Thanks for Sigining up";
         header("location:bar.php");
}


?>