<?php
$connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
$db=mysqli_select_db($connection,'epiz_30571078_jobportal');

if(isset($_POST['add-admin']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
  
    

    $query="INSERT INTO `admin`( `username`, `password`) VALUES ('$username','$password')";

    $query_run=mysqli_query($connection,$query);

    if($query_run){
        echo "<script type='text/javascript'>
                alert('Great !! New Admin Role Has Been Added Successfully. !!');
            window.location.replace('admin-dashboard.php');
       
        </script>";
      
    }
    else{
        echo '<script> alert("Error.."); </script>';
        header('Location: admin-dashboard.php');
    }
}
?>