<?php
    $conn = mysqli_connect("localhost","root","","logindata") or die("connection failed");
if (!empty($_POST['submit']))
{

    $username = $_POST['userid'];
    $password = $_POST['password'];

    $sql= "SELECT * FROM logindatainf WHERE USERID = '$username' AND PASSWORD = '$password' ";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_fetch_array($result);
    if(isset($check)){
        echo 'Login successfully';
    }else{
        echo 'your Userid Or Password is incorrect Please try again';
    }
}
?>