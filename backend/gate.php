<?php

$server="localhost";
$port="root";
$sp="";
$data_base="elib";

//Login page
if(isset($_POST['lsubmit']))
{
    $uname=$_POST['uname'];
    $uname=filter_var($uname,FILTER_SANITIZE_SPECIAL_CHARS);
    $password=$_POST['password'];
    $password=filter_var($password,FILTER_SANITIZE_SPECIAL_CHARS);
    
    echo "<script>alert('Welcome')</script>";
    $conn=new mysqli($server,$sp,$port,$data_base);
    if($conn->error)
    {
        echo "<script>";
        echo "alert('Unable to connect to database')";
        echo "</script>";
        die("Connection failed!");
    }
    else
    {
        $sql="SELECT * FROM users WHERE uname='$uname' AND password='$password'";
        session_start();
        $_SESSION['uname']=$uname;
        if($conn->query($sql))
        {
            echo "<script>";
            echo "window.location.href='../user/tab.php'";
            echo "<script>";
        }
        else
        {
            echo "<script>";
            echo "alert('Wrong username or password try again!')";
            echo "window.location.href='../user/login.php'";
            echo "<script>";
        }
    }

}

//Registration
if(isset($_POST['rsubmit']))
{
    $uname=$_POST['uname'];
    $uname=filter_var($uname,FILTER_SANITIZE_SPECIAL_CHARS);
    $password=$_POST['password'];
    $password=filter_var($password,FILTER_SANITIZE_SPECIAL_CHARS);
    $cpassword=$_POST['cpassword'];
    $cpassword=filter_var($cpassword,FILTER_SANITIZE_SPECIAL_CHARS);
    if(strcmp($password,$cpassword)!=0)
    {
        echo "<script>";
        echo "alert('Passwords do not match!')";
        echo "window.location.href='../user/register.php'";
        echo "</script>";
    }
    else
    {
        $email=$_POST['email'];
        $email=filter_var($email,FILTER_SANITIZE_EMAIL);
        $conn=new mysqli($server,$port,$sp,$data_base);
        if($conn->connect_error)
        {
            echo "<script>";
            echo "alert('Unable to connect to the database try again later')";
            echo "window.location.href='../user/register.php'";
            echo "</script>";
            die('Unable to connect to the database');
        }
        else
        {
            $sql="SELECT * FROM users WHERE uname='$uname'";
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                echo "<script>";
                echo "alert('Username already taken')";
                echo "window.location.href='../user/register.php";
                echo "</script>";
            }
            else
            {
                $sql="INSERT INTO users(uname,password,email,record) VALUES('$uname','$password','$email',NOW())";
                if($conn->query($sql))
                {
                    echo "<script>";
                    echo "alert('Registration Successful')";
                    echo "window.location.href='../user/login.php'";
                    echo "</script>";
                }
                else
                {
                    echo "<script>";
                    echo "alert('Invalied user input')";
                    echo "window.location.href='../user/register.php'";
                    echo "</script>";
                }
            }
        }
        $conn->close();
    }

}
?>