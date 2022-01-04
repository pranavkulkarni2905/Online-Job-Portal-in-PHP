<?php

$connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
$db=mysqli_select_db($connection,'epiz_30571078_jobportal');

if(isset($_POST['login-user']))
{
    $username=$_POST['loginusername'];
    $password=$_POST['loginpassword'];
    $bool=true;

    $query="SELECT * FROM user WHERE username='$username' AND password='$password' ";

    $query_run=mysqli_query($connection,$query);

    $row = mysqli_fetch_array($query_run, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($query_run);  


    $query1="SELECT * FROM admin WHERE username='$username' AND password='$password' ";

    $query_run1=mysqli_query($connection,$query1);

    $row1 = mysqli_fetch_array($query_run1, MYSQLI_ASSOC);  
    $count1 = mysqli_num_rows($query_run1);  

    if($count>0){
        session_start();
        $_SESSION['uname'] = $username;
        $_SESSION['login-msg']="You Have Been Successfully Logged In.";
       
        echo "<script type='text/javascript'>
       alert('Great !! You Have Been Successfuully Logged In.');
       window.location.replace('user-dashboard.php');
       
       </script>";
    
    }
    else if($count1>0){
        session_start();
        $_SESSION['admin'] = $username;
        $_SESSION['login-msg']="You Have Been Successfully Logged In.";
        echo "<script type='text/javascript'>
        alert('Great !! You Have Been Successfuully Logged In.');
        window.location.replace('admin-dashboard.php');
        
        </script>";
    }
    else{
        echo "<script type='text/javascript'>
        alert('Ooops !! Invalid Username And Password.');
        window.location.replace('index.php');
        </script>";
    }
}
?>