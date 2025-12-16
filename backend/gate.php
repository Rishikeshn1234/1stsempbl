<?php

//Login page
if(isset($_POST['lsubmit']))
{
    $uname=$_POST['uname'];
    $uname=filter_var($uname,FILTER_SANITIZE_SPECIAL_CHARS);
    $password=$_POST['password'];
    $password=filter_var($password,FILTER_SANITIZE_SPECIAL_CHARS);
    echo "<script>alert('Welcome')</script>";
}

?>