<?php
	require_once 'connection.php';


	session_start();

	$fname = mysqli_real_escape_string($connection, $_POST['fname']);
	$lname = mysqli_real_escape_string($connection, $_POST['lname']);
	$mail = mysqli_real_escape_string($connection, $_POST['mail']);
	$pswd = mysqli_real_escape_string($connection, $_POST['pswd']);

	//VALIDATION

	if (strlen($fname) < 2) {
		echo 'fname';
	} elseif (strlen($lname) < 2) {
		echo 'lname';
	} elseif (strlen($mail) <= 4) {
		echo 'eshort';
	} elseif (filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
		echo 'eformat';
	} elseif (strlen($pswd) <= 4) {
		echo 'pshort';
		
	//VALIDATION
		
	} else {
		
		//PASSWORD ENCRYPT
		//$spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

		$query = "SELECT * FROM users WHERE mail='$mail'";
		$result = mysqli_query($connection, $query);
		$num_row = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
		
			if ($num_row < 1) {

				$insert_row = mysqli_query($connection,"INSERT INTO users (fname, lname, mail, pswd) VALUES ('$fname', '$lname', '$mail', '$pswd')");

				if ($insert_row) {

					$_SESSION['login'] = $connection->insert_id;
					$_SESSION['fname'] = $fname;
					$_SESSION['lname'] = $lname;

					echo 'true';

				}

			} else {

				echo 'false';

			}
			
	}

?>