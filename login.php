<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login </title>
<link href="layout.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">

</head>

<br><img src="./images/UMLogo.jpg" class='center'>
<h1  align="center">Make a Survey</h1>
<br>

<body>
	<form action='login.php' method='GET'>	
	    <h2 align="center">
		<strong>Username</strong>: 
		<input type='text' name='username' placeholder="username"><br>
		<strong>Password</strong>: 
		<input type='password' name='password' placeholder="password"><br><br>		          
		<input type='submit' name='submit'><br>
		</h2>
	</form>
	
	<form action='register.php' method='link'>
		<p align='center'>
		<input type='submit' value='register'>
		</p>
	</form>	
<?php
	session_start();
	$username = $_GET['username'];
	$password = $_GET['password'];
	$_SESSION['username']=$username;

	$connect= mysql_connect("127.0.0.1","surveyee","123") or die ("Couldn't connect to the database");		
	mysql_select_db("comp7100") or die("Couldn't find database");	
	
	// To protect MySQL injection (more detail about MySQL injection)
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	if($username!='' & $password!=''){
	
	$sql="SELECT * FROM users WHERE username='$username' and password='$password'";
	$result=mysql_query($sql);
	
	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);
	
	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
/*
		while($row = mysql_fetch_array($result, MYSQL_ASSOC))
		{
			echo "Name :{$row['name']} <br>" .
			"Subject : {$row['subject']} <br>" .
			"Message : {$row['message']} <br><br>";
			}

		$row = mysql_fetch_array($result, MYSQL_ASSOC);
		$role = $row['role'];
		
		
		if($role == 'adminr'){
			header("Location:questionnaire.php");
		}else {
		*/	
		//$_SESSION ['username']= $username;
		header("Location:home.php");
//	}
		
	}
	
	else{
		echo"<h2 align=\"center\">"."Invalid Username or Password."."</h2>";
	}	
	}
?>
</body>
</html>


