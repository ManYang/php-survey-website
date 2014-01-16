<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?@session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>logout</title>
<link href="layout.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php

  $_SESSION['username'] = null;

  header("location:login.php");
?>
</body>
</html>
