<html>
<link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
$(document).ready(function() {
    $("#editjobModal").modal('show');
});
</script>

<?php
$connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
$db=mysqli_select_db($connection,'epiz_30571078_jobportal');

if(isset($_POST['edit-job']))
{
    $id=$_POST['id'];
    $title=$_POST['title'];
    $category=$_POST['category'];
    $location=$_POST['location'];
    $status=$_POST['status'];
    $date=$_POST['date'];
    $grd=$_POST['grd-year'];
    $desc=$_POST['desc'];
    

    $query="UPDATE `job` SET `title`='$title',`category`='$category',`location`='$location',`status`='$status',`end-date`='$date',`grd-year`='$grd',`desc`='$desc' WHERE `job_id`='$id'";

    $query_run=mysqli_query($connection,$query);

    if($query_run){
        echo "<script type='text/javascript'>
                alert('Great !! Job Details Has Been Updated Successfully !!');
            window.location.replace('admin-dashboard.php');
       
        </script>";
      
    }
    else{
        echo '<script> alert("Not Updated."); </script>';
        header('Location: admin-dashboard.php');
    }
}
?>



<script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>

<!--Edit JOb Modal -->
<div class="modal fade" id="editjobModal" tabindex="-1" role="dialog" aria-labelledby="signupModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#5578ff">
                <h5 class="modal-title" id="signupModal">Edit Job</h5>
                <a href="admin-dashboard.php"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></a>
            </div>

            <?php
$connection=mysqli_connect("sql113.epizy.com","epiz_30571078","jIJBOdAtIBx");
$db=mysqli_select_db($connection,'epiz_30571078_jobportal');

$job_id=$_GET['job_id'];

$query = "SELECT * FROM job WHERE job_id='$job_id' ";
$query_run = mysqli_query($connection, $query);
?>
<?php
if ($query_run) {
  foreach ($query_run as $row) {
?>
            <div class="modal-body">
                <form action="edit-job.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $job_id; ?>">
                    <div class="form-group">
                        <b><label for="username">Job Title</label></b>
                        <input class="form-control" value="<?php echo $row['title']; ?>" id="username" name="title" placeholder="Job Title" type="text"
                            required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <b><label for="firstName">Job Category</label></b>
                            <select class="custom-select" id="inputGroupSelect01" name="category" required>
                                <option selected><?php echo $row['category']; ?></option>
                                <option value="Computer">Computer</option>
                                <option value="Mechanical">Mechanical</option>
                                <option value="Civil">Civil</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Chemical">Chemical</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <b><label for="lastName">Job Location</label></b>
                            <select class="custom-select" id="inputGroupSelect01" name="location" required>
                                <option selected><?php echo $row['location']; ?></option>
                                <option value="Pune">Pune</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Banglore">Banglore</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Kolkatta">Kolkatta</option>
                                <option value="Ahemadabad">Ahemadabad</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <b><label for="email">Job Status:</label></b>
                        <select class="custom-select" id="inputGroupSelect01" name="status" required>
                            <option selected><?php echo $row['status']; ?></option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>

                        </select>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <b><label for="firstName">End Date</label></b>
                            <input type="date" class="form-control" id="age" value="<?php echo $row['end-date']; ?>" name="date" placeholder="Age" required>
                        </div>
                        <div class="form-group col-md-6">
                            <b><label for="lastName">Graduation Year :</label></b>
                            <input type="text" class="form-control" value="<?php echo $row['grd-year']; ?>" id="education" name="grd-year"
                                placeholder="Graduation Year" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <b><label for="lastName">Job Description :</label></b>
                        <textarea class="form-control" aria-label="With textarea" name="desc" placeholder="Add Job Desc"
                            required><?php echo $row['desc']; ?></textarea>
                    </div><br>
                    <button type="submit" name="edit-job" class="btn btn-success"><i class="fa fa-edit"></i> Edit
                        Job</button>
                        
                </form>

            </div>
            <?php
              }
            } else {
              echo "No Record Found";
            }
            ?>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>