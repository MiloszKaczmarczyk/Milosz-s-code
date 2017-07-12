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
            <input type ="number" name ="PhoneNumber" value="Enter yor phone number here">
            <input type ="submit" value ="Submit">
            <input type ="reset"
            
        </form>
     Your phone number is <?php;
     echo $_POST["PhoneNumber"]; ?>   
        
    </body>
</html>
