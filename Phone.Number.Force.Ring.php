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
            Please input phone number you want to dial here:
            <input type ="number" name ="PhoneNumber" min = "99999999" max = "9999999999" >
            <input type ="submit" value ="Submit">
            <input type ="reset">
        </form>
    <?php
   
    if($_POST["PhoneNumber"] != 0){
        print "The phone number you want to dial  is: ";
        print $_POST["PhoneNumber"];
	$dial = $_POST["PhoneNumber"];
	$ch = curl_init("http://192.168.1.107/command.htm?number=$dial");
	curl_exec($ch);
	curl_close($ch);
	curl_error($ch);
	}else{
	print "Please input a number";
	}

    ?>
        
    </body>
</html>
