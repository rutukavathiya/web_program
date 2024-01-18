<html>
<body>
<form action="" method="post">
<label>Enter Number:</label>
<input type="text" name="num"><br><br>
<input type="submit" name="submit" value="submit"><br><br> 
</form>
</body>
</html>

<?php

$num=$_REQUEST['num'];
$fact=1;

for($i=$num;$i>0;$i--)
{
	$fact=$fact*$i;
}

echo "Factorial of $num is ".$fact;
?>