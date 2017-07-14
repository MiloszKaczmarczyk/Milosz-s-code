
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
      <?php
	if(empty($_POST)) { 
	   ?> <center> <form action ="#" method ="post" name ="CALLFORM">
	    <b> Please enter your user details:</b><br>
	    <input type ="text" style="background-color: #2D6CA3"  name ="CALLFORM-UserName" value = "Your username here"><br>
	    <input type ="password" style="background-color: #2D6CA3" name ="CALLFORM-UserPass" value ="HERE"><br>
            <b>Please input phone number you want to dial here:</b><br>
            <input type ="number" style="background-color: #2D6CA3" name ="CALLFORM-PhoneNumber" min = "99999999" max = "9999999999" ><br>
            <input type ="submit" class="btn btn-primary" name ="CALLFORM-action"  value ="Submit"><br>
            <input type ="reset" class="btn btn-primary" > </center><br></form>
	    
	<?php }else{
		?> <form   action = "#" method ="post" name ="CANCELFORM">
		   <center><b>Cancel the dial</b><br>
		   <input type ="submit" class="btn btn-primary" name ="CANCELFORM-action" value ="Cancel"
		   </center></form>
	 <?php } ?>
    <?php
	
    if($_POST["CALLFORM-PhoneNumber"] != 0){
	print ("<p align ='center'><b>". $_POST["CALLFORM-PhoneNumber"]. "</b></p>");
        $dial = $_POST["CALLFORM-PhoneNumber"];
	$username = $_POST["CALLFORM-UserName"];
        $password = $_POST["CALLFORM-UserPass"];
	setcookie("Username", $username, time() + 60);
	setcookie("Password", $password, time() + 60);
	$ch = curl_init();
	curl_setopt ($ch, CURLOPT_URL, "http://192.168.1.107/command.htm?number=$dial");
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt ($ch, CURLOPT_USERPWD, "$username:$password");
	curl_setopt ($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_error($ch);
	$output = curl_exec($ch);
	$info = curl_getinfo($ch);
	curl_close($ch);
	}else{
                print ("<p align='center'><b><mark>Please input a number</mark></b></p>");
	}
     if (isset($_POST["CANCELFORM-action"])) {
        $username = $_COOKIE["Username"];
	$password = $_COOKIE["Password"];
	$ch2 = curl_init();
        curl_setopt ($ch2, CURLOPT_URL, "http://192.168.1.107/command.htm?key=CANCEL");
        curl_setopt ($ch2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch2, CURLOPT_USERPWD, "$username:$password");
        curl_setopt ($ch2, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_error($ch2);
        $output2 = curl_exec($ch2);
        $info2 = curl_getinfo($ch2);
        curl_close($ch2);
        print("<p align ='center'><b><mark>Call cancelled</mark></b></p>");
        }
	?>
			 
    </body>
</html>
