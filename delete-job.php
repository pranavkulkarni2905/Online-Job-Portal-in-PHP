<?php
$connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
$db=mysqli_select_db($connection,'epiz_30571078_jobportal');

$ID = $_POST['delete_id'];
$sql = " DELETE FROM `job` WHERE job_id = $ID " ;
$query = mysqli_query($connection,$sql);

if($query){
    echo"<script type='text/javascript'>
    alert('Success !! Data Has Been Deleted Successfully !!');
window.location.replace('admin-dashboard.php');

</script>";
}
else{
    echo"<script type='text/javascript'>
    alert('Oops !! Error..');
window.location.replace('admin-dashboard.php');

</script>";
}
?>