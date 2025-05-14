<?php 
 	include "config.php";

 	if (isset($_GET['id'])) 
 	{
 		$delete = mysqli_query($conn,"delete from productorderform where id='".$_GET['id']."'");

 		if ($delete) 				
		{
			echo "<script>;";
			echo "alert('Record Delete....!');";
			echo 'window.location.href = "dashboard.php";';
			echo "</script>;";
		}
		else
		{
			echo "<script>;";
			echo "alert('Data error....!');";
			echo 'window.location.href = "dashboard.php";';
			echo "</script>;";
		}
 	}

  ?>