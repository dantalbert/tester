<!doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link type="text/css" rel="stylesheet" href="suzie.css">
        <title>Suzie Q.</title>
    </head>

    <body>
		<header>
		<h1>Sign Up for the Sewing Slam!</h1>
		<h2>A once in a lifetime opportunity</h2>
		</header>
		
		<section>
			<p>Signing up works best on Google Chrome, Mozilla Firefox and Microsoft Internet Explorer. You are currently using:<p/>
			<p id="browser"><?php
				if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) 
					echo 'Internet explorer, that will do.';
				elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE) 
					echo 'Mozilla Firefox, that works great.';
				elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE) 
					echo 'Google Chrome, you are good to go.';
				else 
					echo 'A different browser, for best performance, switch browsers. Thank you.';
			?></p>
		</section>
		
			<form id="slam" onsubmit="return display" action="my-form.php" method="Post">
			<p><label>First Name</label> <input type="text" name="f_name"/></p>
			<p><label>Last Name</label> <input type="text" name="l_name"></p>
			<p><label>Email:</label> <input type="email" name="email"></p>
			<p><label>I am:</label> <select name="sex">
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select></p>
			<!--<p><input type="date" name="date"/></p>-->
			<p>
			<p><label>My Age is:</label> <input type="number_format" name="age"/></p>
			<p><label><input type="submit" value="Submit"></label></p>
		</form>
	</body>
</html>