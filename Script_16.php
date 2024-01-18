<!DOCTYPE html>
<html>
<body>
<form action="" method="get">
<label>Input String</label>
<input type="text" name="str" id="str"><br><br>
<input type="submit" value="submit" name="submit"><br><br>
</body>
</html>


<?php

$s1=$_REQUEST['str'];
$count=0;

for($i=0;$i<strlen($s1);$i++)
{
	if($s1[$i]=='a' || $s1[$i]=='A' || $s1[$i]=='e' || $s1[$i]=='E' ||$s1[$i]=='i' || $s1[$i]=='I' || $s1[$i]=='o' || $s1[$i]=='O' || $s1[$i]=='u' || $s1[$i]=='U')
	{
		$count=$count+1;
	}
}

echo "Number of vowels=".$count;
?>