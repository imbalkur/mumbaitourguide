<?php include("connection.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
	<body>
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hotel</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="contact-tab" data-toggle="tab" href="#package" role="tab" aria-controls="contact" aria-selected="false">Packages</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="contact-tab" data-toggle="tab" href="#tg" role="tab" aria-controls="contact" aria-selected="false">Tour Guide</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="logout.php" style="float:right;">Logout</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				<h1>Users Information</h1>
				<?php			
				$query= mysql_query("select * from register");
				$rowcount=mysql_num_rows($query);
				?>
				<div class="table-responsive-xl">
				<table class="table">
				<tr>
				<td>id</td>
				<td>fname</td>
				<td>lname</td>
				<td>email</td>
				<td>gender</td>
				<td>phone</td>
				<td>password</td>
				<!--<td>delete</td>-->
				</tr>
				<?php
				for($i=1;$i<=$rowcount;$i++)
				{ $row=mysql_fetch_array($query);
				?>
				<tr>
				<td><?php echo $row["id"] ?></td>
				<td><?php echo $row["fname"] ?></td>
				<td><?php echo $row["lname"] ?></td>
				<td><?php echo $row["email"] ?></td>
				<td><?php echo $row["gender"] ?></td>
				<td><?php echo $row["phone"] ?></td>
				<td><?php echo $row["psw"] ?></td>
				<td><a href="delete.php?del=<?php echo $row["id"] ?>"><button type="submit" name="submit">Delete</button></td>
				</tr>
				<?php
				} 
				?>
				</table>
				</div>
			</div>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<h1>Hotel Booking Details</h1>
  				<?php			
				$query= mysql_query("select * from hotel");
				$rowcount=mysql_num_rows($query);
				?>
				<div class="table-responsive-xl">
				<table class="table">
				<tr>
				<td>hotel_id</td>
				<td>Hotel name</td>
				<td>email</td>
				<td>checkin</td>
				<td>checkout</td>
				<td>no of guest</td>
				<td>room type</td>
				<td>no of room</td>
				<td>breakfast</td>
				<td>lunch</td>
				<td>dinner</td>
				<!--<td>delete</td>-->
				</tr>
				<?php
				for($i=1;$i<=$rowcount;$i++)
				{ $row=mysql_fetch_array($query);
				?>
				<tr>
				<td><?php echo $row["hotel_id"] ?></td>
				<td><?php echo $row["hotel_name"] ?></td>
				<td><?php echo $row["email"] ?></td>
				<td><?php echo $row["h_checkin"] ?></td>
				<td><?php echo $row["h_checkout"] ?></td>
				<td><?php echo $row["no_of_guest"] ?></td>
				<td><?php echo $row["room_type"] ?></td>
				<td><?php echo $row["no_of_room"] ?></td>
				<td><?php echo $row["breakfast"] ?></td>
				<td><?php echo $row["lunch"] ?></td>
				<td><?php echo $row["dinner"] ?></td>
				<td><a href="delete.php?del=<?php echo $row["id"] ?>"><button type="submit" name="submit">Delete</button></td>
				</tr>
				<?php
				} ?>
				</table>
				</div>
			</div>
			<div class="tab-pane fade" id="package" role="tabpanel" aria-labelledby="contact-tab">
				<h1>Package Booking Details</h1>
  				<?php			
				$query= mysql_query("select * from package");
				$rowcount=mysql_num_rows($query);
				?>
				<div class="table-responsive-xl">
				<table class="table">
				<tr>
				<td>Package_id</td>
				<td>Package name</td>
				<td>Email</td>
				<td>Departure Date</td>
				<td>no of guest</td>
				<td>car</td>
				<td>hotel</td>
				<td>no of room</td>
				<td>room type</td>
				<!--<td>delete</td>-->
				</tr>
				<?php
				for($i=1;$i<=$rowcount;$i++)
				{ $row=mysql_fetch_array($query);
				?>
				<tr>
				<td><?php echo $row["package_id"] ?></td>
				<td><?php echo $row["package_name"] ?></td>
				<td><?php echo $row["email"] ?></td>
				<td><?php echo $row["departure_date"] ?></td>
				<td><?php echo $row["no_of_guest"] ?></td>
				<td><?php echo $row["car"] ?></td>
				<td><?php echo $row["hotel"] ?></td>
				<td><?php echo $row["no_of_room"] ?></td>
				<td><?php echo $row["room_type"] ?></td>
				<td><a href="delete.php?del=<?php echo $row["id"] ?>"><button type="submit" name="submit">Delete</button></td>
				</tr>
				<?php
				} ?>
				</table>
				</div>
			</div>
			<div class="tab-pane fade" id="tg" role="tabpanel" aria-labelledby="contact-tab">
			<h1>Tour Guide Registration Request</h1>
  				<?php			
				$query= mysql_query("select * from tourguideregistration");
				$rowcount=mysql_num_rows($query);
				?>
				<div class="table-responsive-xl">
				<table class="table">
				<tr>
				<td>tourguide_id</td>
				<td>email</td>
				<td>residence</td>
				<td>primary Language</td>
				<td>years of experience</td>
				<td>description</td>
				<td>certificate</td>
				<!--<td>delete</td>-->
				</tr>
				<?php
				for($i=1;$i<=$rowcount;$i++)
				{ $row=mysql_fetch_array($query);
				?>
				<tr>
				<td><?php echo $row["tour_guide_regis"] ?></td>
				<td><?php echo $row["email"] ?></td>
				<td><?php echo $row["residence"] ?></td>
				<td><?php echo $row["primary_lang"] ?></td>
				<td><?php echo $row["year_of_experience"] ?></td>
				<td><?php echo $row["description"] ?></td>
				<td><?php echo $row["cert"] ?></td>
				<td><a href="delete.php?del=<?php echo $row["id"] ?>"><button type="submit" name="submit">Delete</button></td>
				</tr>
				<?php
				} ?>
				</table>
				</div>
			</div>
			<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
			<h1>Messages</h1>
  				<?php			
				$query= mysql_query("select * from contact");
				$rowcount=mysql_num_rows($query);
				?>
				<div class="table-responsive-xl">
				<table class="table">
				<tr>
				<td>id</td>
				<td>name</td>
				<td>email</td>
				<td>subject</td>
				<td>comment</td>
				<!--<td>delete</td>-->
				</tr>
				<?php
				for($i=1;$i<=$rowcount;$i++)
				{ $row=mysql_fetch_array($query);
				?>
				<tr>
				<td><?php echo $row["contact_id"] ?></td>
				<td><?php echo $row["name"] ?></td>
				<td><?php echo $row["email"] ?></td>
				<td><?php echo $row["subject"] ?></td>
				<td><?php echo $row["comment"] ?></td>
				<td><a href="delete.php?del=<?php echo $row["id"] ?>"><button type="submit" name="submit">Delete</button></td>
				</tr>
				<?php
				} ?>
				</table>
				</div>
				<?php 
					if(isset($_POST['submit']))
					{
					$message = $_POST['Message'];
					$email = $_POST['email'];
					$subject=$_POST['subject'];
					$message=$_POST['Message'];
					$s1="INSERT INTO reply(email,subject,message) values('".$email."','".$subject."','".$message."')";
					mysql_query($s1) or die (mysql_error($conn));
					echo "<script> alert('message sent');</script>";
					}
				?>		
				<div id="container">
					<h1>Sending Message</h1>
					<form action="admin.php" method="POST">
						<ul>
							<li>
							<label for="email">Email</label>
							<input type="text" name="email" id="email" name="email" placeholder="" /></li>
							<li>
							<label for="subject">Subject</label><br />
							<textarea name="subject" id="subject" name="subject" cols="45" rows="1"></textarea>
							</li>
							<li>
							<label for="Message">Message</label><br />
							<textarea name="Message" id="Message" name="Message" cols="45" rows="15"></textarea>
							</li>
							<li><input type="submit" value="Send Message" name="submit"/></li>
						</ul>
					</form>
				</div>
			</div>
		</div>

</body>
</html>