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
	$cookie ="cookie.txt";
	$postdata = "user=".$username."&password=".$password;
	$ch = curl_init();
	curl_setopt ($ch, CURLOPT_URL, "http://192.168.1.107/command.htm?number=$dial");
	curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt ($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie);
	curl_setopt ($ch, CURLOPT_REFERER, "http://192.168.1.107/command.htm?number=$dial"); 
	curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata);
	curl_setopt ($ch, CURLOPT_POST, 1);
	curl_error($ch);
	curl_exec($ch);
	curl_close($ch);
	}else{
	print "Please input a number";
	}

    ?>
        
    </body>
</html>
