<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Thank You</title>
    <link type="text/css" rel="stylesheet" href="suzie.css">
</head>
<body>
    <h1>Thank You For Signing Up.</h1>
    
	<p>Thanks for signing up for the sewing slam <?php echo $_POST["f_name"]; ?>.</p>
	
	<p><?php
		$b = $_POST["age"];
		
		$a=30-$b;
	?></p>
	
	<p><?php 
		if($b<"30"){
		echo "While we appreciate your enthusiasm, " . $b . " years old is too young to participate, you must be at least 30 years old. We would love to see you in " . $a . " years, when we feel you will have the physical and mental capacity to handle a sewing slam.";
		}
		else{
		echo "We are excited you are going to compete in the sewing slam.  You must understand, there is a chance you will get slammed.";
		}
	?></p>
	
	<!--Welcome <?php echo $_POST["name"]; ?>
	Your email address is: <?php echo $_POST["email"]; ?>-->

</body>
</html>