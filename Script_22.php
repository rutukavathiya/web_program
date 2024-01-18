<html>
<body>
<form action="" method="post">
<label>Enter Radius:</label>
<input type="text" name="radius"><br><br>
<input type="submit" name="submit" value="submit"><br><br> 
</form>
</body>
</html>

<?php

$r=$_REQUEST['radius'];

$area=3.14*$r*$r;

echo "Area of circle is ".$area;
?>