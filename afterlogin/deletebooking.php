<?php
				include("connection.php");
				$delete=$_GET['del'];
				$deletequery="delete from hotel where hotel_id='$delete'";
				mysql_query($deletequery);
				header("Location:profile.php");
				?>
				<?php
				$delete=$_GET['dell'];
				$deletequery="delete from package where package_id='$delete'";
				mysql_query($deletequery);
				header("Location:profile.php");
				?>
				<?php
				$delete=$_GET['dele'];
				$deletequery="delete from guide where tourguide_id='$delete'";
				mysql_query($deletequery);
				header("Location:profile.php");
				?>