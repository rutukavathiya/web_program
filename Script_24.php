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

$a=sqrt($num);

echo "Square root of $num is ".$a;
?>