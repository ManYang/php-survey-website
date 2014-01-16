<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Index </title>
<link href="layout.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="anime.js"></script>
</head>

<?php
	session_start();
	if (!isset($_SESSION['username'])){
		header("Location:login.php");
	}
?>
<body>

<div class="container">
  <div table class="menubar">
    <tr>
      <tb width="300"><a href="home.php">Home</a></tb>
      <tb width="300"><a href="survey.php">Take a Survey</a></tb>
      <tb width="300"><a href="data-analysis.php">Results</a></tb>     
      <tb width="300"><a href="logout.php">Logout Here</a></tb>  
     </tr>
     </table>
     </div>
  <div class="content">
    <h1>Welcome</h1>
    <p>This simple website aimed at investigating your opinion about swarm technology as well as other mainsterm technology. It will be great helpful if you to leave some footprint on this web, so feel free to ask questions.</p>
    <h1>About swarm methodology</h1>
    <p>A new development methodology is based on ”Swarms”. Swarm computing is the study of collective computing
     by decentralized, self-organized systems, such as that exhibited by ants and bees, where apparently 
     disorderly and chaotic behavior leads to perfectly meaningful and organized activities and products. 
     We focus on how to use swarms for software development (SMSD) in order to reduce costs and delays</p>
    <h1>About this website</h1>
    <p>In the left side-bar there is questionnaire menu, when you clicked in a set of questions will come up. It will take less than 5 minutes to finished the questionnaire. After finish it you are able to see the results of all participators in "Data Analysis" menu.</p>
    <p>Data analysis conclude some basic information about testers, like education background, major, skills in computer field, etc. For each question, max, min and avg results are given.There also a pie chart to show percentage of each answer.</p>
    <p>&nbsp;</p>
    <h2>Please go "Take a Survey" tab to do the survey.</h2>
    <h3>&nbsp;</h3>
   </div>
</div>   
</body>
</html>
