<?php

$connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
$db=mysqli_select_db($connection,'epiz_30571078_jobportal');

if(isset($_POST['reply']))
{
    $email=$_POST['email'];
    $msg=$_POST['message'];
    $contact_id=$_POST['contact_id'];
    
    

    $query="UPDATE `contact` SET `reply`='$msg' WHERE `contact_id`='$contact_id' ";

    $query_run=mysqli_query($connection,$query);

    $subject="Reply From Admin[Jobly Portal]";
    $final_msg="Dear User ,\n". $msg. "\nThanks and regards\nJobly Portal Team.";
    $headers="From: pdk29052003@gmail.com";

    if($query_run){
        if(mail($email,$subject,$final_msg,$headers)){
        echo "<script type='text/javascript'>
                alert('Reply Sent Successfully !!');
            window.location.replace('admin-dashboard.php');
       
        </script>";
        }
      
    }
    else{
        echo "<script type='text/javascript'>
        alert('Error...!!');
    window.location.replace('admin-dashboard.php');

</script>";
    }
}


?>