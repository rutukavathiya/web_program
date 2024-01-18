<html>
<body>
<form action="" method="post">
Enter 1st Number:
<input type="text" name="n1" />
Enter 2nd Number:
<input type="text" name="n2" />
<input type="submit" name="submit" value="submit" />
</form>
</body>
</html>


<?php

$a=$_REQUEST['n1'];
$b=$_REQUEST['n2'];

echo "Number 1=".$a."<br>";
echo "Number 2=".$b."<br>";

$a=$a+$b;
$b=$a-$b;
$a=$a-$b;

echo "After Swapping<br>";
echo "Number 1=".$a."<br>";
echo "Number 2=".$b;
?>