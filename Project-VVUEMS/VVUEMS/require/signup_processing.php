<?php
require_once 'connectDB.php';

if (isset($_POST['fname']) && isset($_POST['mname']) && isset($_POST['lname']) && isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password1']) && isset($_POST['password2'])) {

	if ($_POST['password1'] !== $_POST['password2']) {
		# code...

		echo '<div class="alert alert-danger text-center">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		Passwords do not match</div>';
	}
	else if($_POST['password1'] === $_POST['password2']){

		$fname = $_POST['fname'];
		$fname = ucfirst(strtolower($fname));
		$mname = $_POST['mname'];
		$mname = ucfirst(strtolower($mname));
		$lname = $_POST['lname'];
		$lname = ucfirst(strtolower($lname));
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$email = strtolower($email);
		$phone = $_POST['phone'];
		$pass = password_hash($_POST['password1'], PASSWORD_DEFAULT);

		$query = "SELECT Username, Email, Phone FROM `customers` WHERE `Username`='$uname' OR `Email`='$email' OR `Phone` = '$phone'";

		if ($query_run = mysqli_query($conn, $query)) {
			# code...
			if ($query_run-> num_rows == 1) {
				# code...
				$user = mysqli_fetch_array($query_run);

				if (is_array($user)) {
					# code...
					if ($user['ID'] === $uname) {
						# code...
						echo '<div class="alert alert-info text-center">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						Sorry, the username already exists</div>';
					}
					
					if ($user['Email'] === $email) {
						# code...
						echo '<div class="alert alert-info text-center">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						Sorry, this email already exists!!</div>';
					}
					
					if ($user['Phone'] === $phone) {
						# code...
						echo '<div class="alert alert-info text-center">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						Sorry, this phone number already exists!!</div>';
					}			
				}

			}else{
				

				$insert_query = "INSERT INTO `customers`(`Username`, `Fname`, `Mname`, `Lname`, `Passwords`, `Phone`, `Email`) VALUES ('$uname','$fname','$mname','$lname','$pass','$phone','$email')";

				if ($query_run = mysqli_query($conn, $insert_query)) {

					echo '<div class="alert alert-success text-center">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					Account Created Successfully!!</div>';

				}
				else{
					die('Query failed'.mysqli_error($conn)); 
				}
			}
		}else{
			die('Query failed'.mysqli_error($conn)); 
		}

	}
}


?>