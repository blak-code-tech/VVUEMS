<?php
	session_start();
	require_once 'connectDB.php';

	if (isset($_POST['userbtn']) && isset($_POST['id']) && isset($_POST['password'])) {
		# code...
		$id = $_POST['id'];
		$pass = $_POST['password'];
		$query = "SELECT * FROM `customers` WHERE `Username`='$id'";

		if ($query_run = mysqli_query($conn, $query)) {
			# code...
			if ($query_run-> num_rows == 0) {
				# code...
				echo '<div class="alert alert-danger text-center">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Invalid ID</div>';
			}else if ($query_run-> num_rows == 1) {
				# code...
				$user = mysqli_fetch_array($query_run);

				if (is_array($user)) {
					# code...
					if (password_verify($pass, $user['Passwords'])) {
						# code...
						$_SESSION['id'] = $user['Username'];
						$_SESSION['fname'] = $user['Fname'];	
						$_SESSION['mname'] = $user['Mname'];	
						$_SESSION['lname'] = $user['Lname'];	
						$_SESSION['email'] = $user['Email'];	
						$_SESSION['phone'] = $user['Phone'];
					}
					else{
						echo '<div class="alert alert-danger text-center">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						Invalid Password</div>';
					}
						
				}else{
					echo "OK not working";
				}

				if (isset($_SESSION['id'])) {
					# code...
					header('Location: Home.php');
					ob_end_flush();
				}	
					
			}
		}
	}

?>