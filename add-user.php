<html>
<link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>

<?php
$connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
$db=mysqli_select_db($connection,'epiz_30571078_jobportal');

if(isset($_POST['add-user']))
{
    $username=$_POST['username'];

    $query = "SELECT * FROM `user` WHERE username='$username' ";
    $query_run = mysqli_query($connection, $query);
   
        if ($query_run) {

          foreach ($query_run as $row) {
              if($row['username']==$username){
                echo "<script type='text/javascript'>
                alert('This Username is Already Taken , Please Choose a UNIQUE username for you. Thank You... ');
                 window.location.replace('index.php');
       
              </script>";
              exit;
              }
        }
    } 

    $fname=$_POST['firstName'];
    $lname=$_POST['lastName'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];

    if($age<=18){
        echo "<script type='text/javascript'>
                alert('Age Must Be Greater than 18. ');
                 window.location.replace('index.php');
       
              </script>";
              exit;
    }
    $education=$_POST['education'];
    $password=$_POST['password'];

    $query="INSERT INTO user (`username`, `firstname`, `lastname`, `email`, `phone`,`age`,`education`,`password`) VALUES ('$username','$fname','$lname','$email','$phone','$age','$education','$password')";

    $query_run=mysqli_query($connection,$query);

    if($query_run){
        echo "<script type='text/javascript'>
                alert('You Have Registered Successfully. !!');
            window.location.replace('index.php');
       
        </script>";
      
    }
    else{
        echo "<script type='text/javascript'>
                alert('Error..');
            window.location.replace('index.php');
       
        </script>";
    }
}

?>
<script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
</html>