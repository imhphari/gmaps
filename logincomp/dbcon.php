<?php
	$db_name="logincomp";
	$db_user="root";
	$db_pass="root";
	$db_host="localhost:8889";

	$conn=mysqli_connect("$db_host","$db_user","$db_pass","$db_name");

	if(!$conn)
	{
		echo "Connection failed";
	}

	else
	{
		echo "success";
	}

?>
