<?php
session_start();

$con = mysqli_connect('localhost','id14578692_musicwebsite','Lance-champ-01');
mysqli_select_db($con,'id14578692_website2');
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