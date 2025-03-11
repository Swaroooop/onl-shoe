<?php

include('db/dbconn.php');

if (isset($_POST['login']))

	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		$encrypt=sha1($password);

		
			$result=$conn->query("SELECT * FROM customer WHERE email='$email' AND password='$encrypt' ")
				or die ('cannot login' . mysqli_error());
			$row=$result->fetch_array  ();
			$run_num_rows = $result->num_rows;
							
						if ($run_num_rows > 0 )
						{
							session_start ();
							$_SESSION['id'] = $row['customerid'];
							//here we are actually assinging the customer id to the session id;
							header ("location:home.php");
						}
						
						// else
						// {
						// 	echo "<script>alert('Invalid Email or Password')</script>";
						// 	header("location:home.php");
						// }

						else {
							echo "<script>alert('Invalid Email or Password')</script>";
							echo "<script>window.location.href = 'home.php';</script>";
						}
	}

?>