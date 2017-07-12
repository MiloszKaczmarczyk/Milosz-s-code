<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form method = "post" action = "/Basic.Clicker.php" >
	Clicker: <button type =  "submit" name = "Clicks"  > Make a coin </button>
	</form> 

	<script language = "php"?>
	$a = 1; //the clicks count
	$b = 0; //the copper coin count
	$c = 0; //the  silver coin count
	$d = 0; //the gold coin count
	$z = 100; // the conversion value
		if (isset($a['is submitted'])== 'submitted' ) {
			$a = $a + 1;
			$b = $b + 1}
		else {
			$a = $a;
			$b = $b;
			$c = $c;
			$d = $d;
			$z = 100;
			if ($b) > $z  {
				$b = $b - 100;
				$c= $c + 1}
			else {
				$b = $b;
				$c = $c;
				$d = $d}
			if($c > $z {
				$c = $c - 1;
				$d = $d + 1}
			else {
				$c = $c;
				$d = $d}
			</script>
			<form><table border = "BASIC">
			<tr><td>Copper coins you have :</td><td> <script language = "php"?> echo "$b" </script></td></tr>
			<tr><td>Silver coins you have :</td><td> <script language = "php"?> echo "$c" </script></td></tr>
			<tr><td>Golden coins you have :</td><td> <script language = "php"?> echo "$d" </script></td></tr>
			</table></form>
			<script language = "php"?>
			}
			</script>
        
    </body>
</html>
