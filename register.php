<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Register </title>
<link href="layout.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
<br><img src="./images/UMLogo.jpg" class='center'>
	<h1  align="center">Register</h1>
<br>
<form method='get'>
<p align='center'>
		<strong>Username</strong>: 
		<input type='text' name='username' placeholder="username"><br>
		<strong>Password</strong>: 
		<input type='password' name='password' placeholder="password"><br><br>	          
		<input type='submit' value = 'submit' name='Register'><br>
</p>
</form>

<?php 

		$connect= mysql_connect("127.0.0.1","surveyee","123") or die ("Couldn't connect to database".mysql_error());
		mysql_select_db("comp7100", $connect);
		$username = $_GET['username'];
		$password = $_GET['password'];
		$sql="SELECT * FROM users WHERE username='$username'";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);
		if($count != 0){
			echo"<h2 align=\"center\">"."Username already exist, change to another one."."</h2>";
			}
			
		elseif($username != "" && $password != "")
		{
			$sql2 = "insert into users values ($username, $password, 'taker');";
			mysql_query($sql2)or mysql_error();
			echo"<h2 align=\"center\">"."User registered!"."</h2>";
			echo'<form action=\'login.php\' method=\'link\'>
				<p align=\'center\'>
				<input type=\'submit\' value=\'return\'>
				</p>
				</form>';
		}
		
		
		mysql_close($connect);
		/*header("location:login.html");*/
?>
</body>
</html>
