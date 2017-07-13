<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Phone Number show</title>
    </head>
    <body>
        <form action ="#" method ="post">
            Please input your phone number here:
            <input type ="number" name ="PhoneNumber" min = "0" max = "9999999999" >
            <input type ="submit" value ="Submit">
            <input type ="reset">
        </form>
    <?php
   
    if($_POST["PhoneNumber"] != 0){
        print "Your phone number is: ";
        print $_POST["PhoneNumber"];
	}else{
	print "Please input a number";
	}
    
    
    ?>
        
    </body>
</html>
