<html>
<body>
<form action="" method="post">
<label>Guess number bet. 1 and 10:</label>
<input type="text" name="num"><br><br>
<input type="submit" name="submit" value="submit"><br><br> 
</form>
</body>
</html>

<?php

$num=$_REQUEST['num'];

$a=rand(1,10);
echo $a."<br><br>";

if($a==$num)
{
	echo "Both numbers are same";
}
else
{
	echo "Both numbers are different";
}
?>
