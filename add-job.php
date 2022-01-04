<html>
<link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>

<?php
$connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
$db=mysqli_select_db($connection,'epiz_30571078_jobportal');

if(isset($_POST['add-job']))
{
    $title=$_POST['title'];
    $category=$_POST['category'];
    $location=$_POST['location'];
    $status=$_POST['status'];
    $date=$_POST['date'];
    $grd=$_POST['grd-year'];
    $desc=$_POST['desc'];
    

    $query="INSERT INTO `job`( `title`, `category`, `location`, `status`, `end-date`, `grd-year`, `desc`) VALUES ('$title','$category','$location','$status','$date','$grd','$desc')";

    $query_run=mysqli_query($connection,$query);

    if($query_run){
        echo "<script type='text/javascript'>
                alert('New Job Has Been Added Successfully. !!');
            window.location.replace('admin-dashboard.php');
       
        </script>";
      
    }
    else{
        echo '<script> alert("data not saved"); </script>';
        header('Location: admin-dashboard.php');
    }
}
?>
<script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
</html>