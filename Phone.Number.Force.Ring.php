<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Phone Number Forced Ring</title>
    </head>
    <body>
        <form action ="#" method ="post">
	    Please enter your user details:<br>
	    <input type ="text" name ="UserName" value = "Your username here"><br>
	    <input type ="password" name ="UserPass" value ="******************"><br>
            Please input phone number you want to dial here:<br>
            <input type ="number" name ="PhoneNumber" min = "99999999" max = "9999999999" ><br>
            <input type ="submit" value ="Submit"><br>
            <input type ="reset"><br>
        </form>
    <?php

    if($_POST["PhoneNumber"] != 0){
        print "The phone number you want to dial  is: ";
        print $_POST["PhoneNumber"];
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
	}else{
	print "Please input a number";
	}

    ?>
        
    </body>
</html>
