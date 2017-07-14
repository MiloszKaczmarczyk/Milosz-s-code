<html>
    <head>
        <meta charset="UTF-8">
        <title>Phone Number Forced Ring</title>
        <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
       <center> <form action ="#" method ="post">
	   <b> Please enter your user details:</b><br>
	    <input type ="text" name ="UserName" value = "Your username here"><br>
	    <input type ="password" name ="UserPass" value ="******************"><br>
            <b>Please input phone number you want to dial here:</b><br>
            <input type ="number" name ="PhoneNumber" min = "99999999" max = "9999999999" ><br>
            <input type ="submit" value ="Submit"><br>
            <input type ="reset"></center><br>
        </form>
    <?php

    if($_POST["PhoneNumber"] != 0){
        print ("<p align='center'><b>The phone number you want to dial  is:</b> </p>");
	print ("<p align ='center'><b>". $_POST["PhoneNumber"]. "</b></p>");
	$dial = $_POST["PhoneNumber"];
	$username = $_POST["UserName"];
	$password = $_POST["UserPass"];
	$ch = curl_init();
	curl_setopt ($ch, CURLOPT_URL, "http://192.168.1.107/command.htm?number=$dial");
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt ($ch, CURLOPT_USERPWD, "$username:$password");
	curl_setopt ($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_error($ch);
	$output = curl_exec($ch);
	$info = curl_getinfo($ch);
	curl_close($ch);
	?>
	<form action="#" method="post">
	<center><b>Cancel the dial</b><br>
	<input type ="submit"  name ="CANCEL" value="Cancel"></center>
	</form>
	<?php
	 if (isset($_POST["CANCEL"])){
		$ch2 = curl_init();
		curl_setopt ($ch2, CURLOPT_URL, "http://$username:$password@192.168.1.107/command.htm?key=CANCEL");
		curl_setopt ($ch2, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($ch2, CURLOPT_USERPWD, "$username:$password");
		curl_setopt ($ch2, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		$output2 = curl_exec($ch2);
		curl_error($ch2);
		curl_close($ch2);
	}
	}else{
	print "<p align='center'><b>Please input a number</b></p>";
	}

    ?>
        
    </body>
</html>
