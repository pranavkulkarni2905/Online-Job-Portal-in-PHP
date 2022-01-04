<?php
$connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
$db=mysqli_select_db($connection,'epiz_30571078_jobportal');

if(isset($_POST['contact']))
{
    $user_id=$_POST['user_id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    

    $query="INSERT INTO `contact`( `user_id`,`name`, `email`, `subject`, `message`) VALUES ('$user_id','$name','$email','$subject','$message')";

    $query_run=mysqli_query($connection,$query);

    if($query_run){
        echo "<script type='text/javascript'>
                alert('Your Message Has Been Sent Successfully.. !!');
            window.location.replace('user-dashboard.php');
       
        </script>";
      
    }
    else{
        echo '<script> alert("data not saved"); </script>';
        header('Location: admin-dashboard.php');
    }
}
?>