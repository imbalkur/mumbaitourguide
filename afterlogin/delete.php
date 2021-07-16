<?php
include("connection.php");
$delete=$_GET['del'];
$deletequery="delete from register where id='$delete'";
				mysql_query($deletequery);
				header("Location:admin.php");
				?>