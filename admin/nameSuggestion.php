<?php
  session_start();

include('../config.php');


$q=$_GET["q"];

$result=mysqli_query($conn,"SELECT firstname FROM admin where firstname= '$q' ");

$rows=mysqli_num_rows($result);
if ($rows != 0)
{
        echo "name already exist";
		$_SESSION['check1']=1;

}
else
	$_SESSION['check1']=0;

?>