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
        <form action ="" method ="post">
            <input type ="number" name ="PhoneNumber" value="<?php echo $number"">
            <input type ="submit" value ="Submit">
            <input type ="reset">
        </form>
        <?php 	
        $number = "";
        if (isset($_POST["submit"])) {
        echo("You have entered:" . htmlspecialcahrs($_POST["PhoneNumber"]));
        
        }
     
        
        function test_input($data) {
        $data = trim($data);
        $data = stripsplashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        
        ?>
        
    </body>
</html>
