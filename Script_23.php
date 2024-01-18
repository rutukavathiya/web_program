<html>
<body>
<form action="" method="post">
Enter 1st Number:
<input type="text" name="n1" />
Enter 2nd Number:
<input type="text" name="n2" />
Enter 3rd Number:
<input type="text" name="n3" />
<input type="submit" name="submit" value="submit" />
</form>
</body>
</html>

<?php

$a=$_REQUEST['n1'];
$b=$_REQUEST['n2'];
$c=$_REQUEST['n3'];

if($a>$b)
{
	if($a>$c)
	{
		echo "a is maximum";
	}
	else
	{
		echo "c is maximum";
	}
}
else
{
	if($b>$c)
	{
		echo "b is maximum";
	}
	else
	{
		echo "c is maximun";
	}
}
?>