<?php
session_start();

$con = mysqli_connect('localhost','epiz_26489704','
nIu1aPpQnj');
mysqli_select_db($con,'epiz_26489704_musicwebsite');
if(isset($_POST['login']))
{
$UName = $_POST['uName'];
$PAssword = $_POST['pAssword'];

$s = "select * from regdetails where Username='$UName' && Password='$PAssword'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    header('location:Choose.html');
}else{
    echo "<script>alert('login fail')</script>";
}
}
?>