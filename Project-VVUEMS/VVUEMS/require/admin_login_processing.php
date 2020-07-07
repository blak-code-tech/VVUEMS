<?php
	session_start();
	require_once 'connectDB.php';

	if (isset($_POST['admin_btn']) && isset($_POST['id']) && isset($_POST['password'])) {
		# code...
		$id = $_POST['id'];
		$pass = $_POST['password'];
		$pass = md5($pass);
		$query = "SELECT * FROM `admin` WHERE `ID`='$id' AND `Password`='$pass'";

		if ($query_run = mysqli_query($conn, $query)) {
			# code...
			if ($query_run-> num_rows == 0) {
				# code...
				echo '<div class="alert alert-danger text-center">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Invalid ID/Password</div>';
			}else if ($query_run-> num_rows == 1) {
				# code...
				$user = mysqli_fetch_array($query_run);
				
				if (is_array($user)) {
					# code...
					$_SESSION['id'] = $user['ID'];
					$_SESSION['fname'] = $user['Fname'];	
					$_SESSION['mname'] = $user['Mname'];	
					$_SESSION['lname'] = $user['Lname'];	
					$_SESSION['email'] = $user['Email'];	
					$_SESSION['phone'] = $user['Phone'];	
				}else{
					echo "OK not working";
				}

				if (isset($_SESSION['id'])) {
					# code...
					header('Location: admin_customers.php');
					ob_end_flush();
				}
				
			}
		}
	}

?>