<?php
session_start();
unset($_SESSION["uname"]);
session_destroy();
echo "<script type='text/javascript'>
alert('You Have Been Logout Successfully..');
window.location.replace('index.php');

</script>";
exit;

?>