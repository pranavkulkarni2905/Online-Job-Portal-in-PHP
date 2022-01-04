<?php
session_start();
unset($_SESSION["admin"]);
session_destroy();
echo "<script type='text/javascript'>
alert('You Have Been Logout Successfully..');
window.location.replace('index.php');

</script>";
exit;

?>