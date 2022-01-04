<?php
$connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
$db=mysqli_select_db($connection,'epiz_30571078_jobportal');

if(isset($_POST['apply-job']))
{
    $user_id=$_POST['user_id'];
    $job_id=$_POST['job_id'];

    $query = "SELECT * FROM `user-application` WHERE user_id='$user_id' ";
    $query_run = mysqli_query($connection, $query);
   

    if ($query_run) {
        foreach ($query_run as $row) {
            if($row['job_id']==$job_id){
              echo "<script type='text/javascript'>
              alert('You Have Already Applied For This Job. Thank You... ');
               window.location.replace('user-dashboard.php');
     
            </script>";
            exit;
            }
      }
 } 
    
     
    

    $clgname=$_POST['clgname'];
    $percentage=$_POST['percentage'];
    $skills=$_POST['skill'];
   // $cv=$_POST['cv'];
    $title=$_POST['title'];
    $username=$_POST['username'];


    $filename = $_FILES['cv']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['cv']['tmp_name'];
    $size = $_FILES['cv']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } 
    elseif ($_FILES['cv']['size'] > 10000000) { // file shouldn't be larger than 10Megabyte
        echo "File too large!";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
           
    

             $query="INSERT INTO `user-application`( `user_id`, `job_id`, `clgname`, `percentage`, `skills`, `cv`, `job_title`, `username`) VALUES ('$user_id','$job_id','$clgname','$percentage','$skills','$filename','$title','$username')";

            $query_run=mysqli_query($connection,$query);

            if($query_run){
                session_start();
               
                $_SESSION['apply-msg']=" You Have Been Successfully Applied For this Job. We Will Contact You Soon After Verification of Your Profile.Thank You.";
                echo "<script type='text/javascript'>
                alert('Congratulations !! You Have Successfully Applied For a Job. ');
                 window.location.replace('user-dashboard.php');
       
              </script>";
      
            }
        }
        else{
            echo "<script type='text/javascript'>
            alert('Error ');
             window.location.replace('user-dashboard.php');
   
             </script>";
        }
    }
}
   


?>