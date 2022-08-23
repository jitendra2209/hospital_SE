<?php
	session_start();
	  //server connection
	  $conn=mysqli_connect("localhost","root","","hms");

	  //check connection
		if($conn===false)
		{
			die("ERROR:could not connect.".mysqli_connect_error());
		}

	/*if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }*/

	$uname=$_POST['username'];
	$pass=$_POST['password'];

	if(empty($uname))
	{
		header("Location:login.php?error=username is required");
		exit();
	}
	else if(empty($pass))
	{
		header("Location:login.php?error=password is required");
		exit();
	}
	else
	{
		$sql=" SELECT * FROM users WHERE username='$uname' AND password='$pass' ";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)===1)
		{
			$row=mysqli_fetch_assoc($result);
			if($row['username']===$uname && $row['password']===$pass)
			{
				echo "Logged in!";

				$_SESSION['username']=$row['username'];
				header("Location:home.html");
			}
		}
	}
	ob_end_flush();
?>