

<?php
// Database Connection 
if($_SERVER['REQUEST_METHOD']=='POST')

{
require_once ('config.php'); 

$sql="INSERT INTO time_in(user_ic,serial_num,time_in) VALUES ('{$_POST['user_ic']}', '{$_POST['serial_num']}, NOW())";

if(mysqli_query($con, $sql))
{
	echo "succesful";
}else {
	echo 'error';
}
}

?>