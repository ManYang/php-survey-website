<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Data Analysis</title>
<link href="layout.css" rel="stylesheet" type="text/css">

</head>

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
    <h1>Data Analysis</h1>
    <p >Data populate from questionnarie section will be shown here.</p>
    <?php
 		$connect= mysql_connect("127.0.0.1","surveyee","123") or die ("Couldn't connect to database".mysql_error());
		mysql_select_db("comp7100", $connect);
		
		$sql= "select question_id, avg(answer), min(answer), max(answer)from answers group by question_id";
		$result=mysql_query($sql);
		$head=mysql_fetch_array($result);
		echo"<br>";
		echo "<table border=1 align=\"center\" >";
   		print "<tr>";
    	//get filed name and store them in table head
    	while($field = mysql_fetch_field($result)){
    	print " <th>$field->name</th>\n";
    	}
    	print "</tr>";
    //foreach to get data of each field
   while($row =mysql_fetch_assoc($result)){
    	print "<tr>";
    	foreach ($row as $col=>$val){
    		print "<td>$val</td>\n";
    	}
    	print "</tr>";
    }
    echo "</table>";  
    mysql_close($connect);
    ?>
    
    <p>&nbsp;</p>
    <h1>&nbsp;</h1>
    <p>&nbsp;</p>
    <h3>&nbsp;</h3>
    <!-- end .content --></div>
  <!-- end .container --></div>
</body>
</html>
