<?php
session_start();

$con = mysqli_connect('localhost','id14578692_musicwebsite','Lance-champ-01');
mysqli_select_db($con,'id14578692_website2');

$NAme = $_POST['nAme'];
$UName = $_POST['uName'];
$EMail = $_POST['eMail'];
$PAssword = $_POST['pAssword'];

$s = "select * from regdetails where Username='$UName'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    echo "Username Already Taken...";    
}else{
    $reg = "insert into regdetails(Name,Username,Email,Password) values('$NAme','$UName','$EMail','$PAssword')"; 
    mysqli_query($con,$reg);
    echo "<script>alert('Registration Successful....')</script>";
    header('location:Choose.html');
}
?>