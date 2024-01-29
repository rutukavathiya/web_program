<?php

echo '<table border=1>';
echo '<tr><td>';
$A1=array("abc","def","ghi","jkl","mno","pqr","stu","vwx","yz","ILoveYou");
echo '</tr></td>';

print_r($A1);
echo "<br><br>";


$student=array("Rollno"=>1,"Name"=>"rutu","City"=>"rajkot","Country"=>"India","age"=>19,"Department"=>"BCA","Division"=>"B1","Enrollment"=>220801168,"Register_no"=>"15612422170","University"=>"Atmiya");


print_r($student);
echo "<br><br>";

$students_master=array(array("Rollno"=>1,"Name"=>"rutu","City"=>"rajkot","Country"=>"India","age"=>19,"Department"=>"BCA","Division"=>"B1","Enrollment"=>220801168,"Register_no"=>"15612422170","University"=>"Atmiya"),
array("Rollno"=>2,"Name"=>"khushi","City"=>"rajkot","Country"=>"India","age"=>20,"Department"=>"BCA","Division"=>"B1","Enrollment"=>220801273,"Register_no"=>"15612422046","University"=>"Atmiya"),
array("Rollno"=>3,"Name"=>"kesha","City"=>"rajkot","Country"=>"India","age"=>19,"Department"=>"BCA","Division"=>"B1","Enrollment"=>220801274,"Register_no"=>"15612422047","University"=>"Atmiya"),
array("Rollno"=>4,"Name"=>"Prushti","City"=>"Gondal","Country"=>"India","age"=>20,"Department"=>"BCA","Division"=>"B1","Enrollment"=>220801275,"Register_no"=>"15612422048","University"=>"Atmiya"),
array("Rollno"=>5,"Name"=>"Sakshi","City"=>"lalpur","Country"=>"India","age"=>20,"Department"=>"BCA","Division"=>"B1","Enrollment"=>220801276,"Register_no"=>"15612422049","University"=>"Atmiya"),
array("Rollno"=>6,"Name"=>"Srushti","City"=>"rajkot","Country"=>"India","age"=>20,"Department"=>"BCA","Division"=>"B1","Enrollment"=>220801277,"Register_no"=>"15612422050","University"=>"Atmiya"),
array("Rollno"=>7,"Name"=>"Khushu","City"=>"keshod","Country"=>"India","age"=>20,"Department"=>"BCA","Division"=>"B1","Enrollment"=>220801278,"Register_no"=>"15612422051","University"=>"Atmiya"),
array("Rollno"=>8,"Name"=>"Krina","City"=>"junagadh","Country"=>"India","age"=>20,"Department"=>"BCA","Division"=>"B1","Enrollment"=>220801279,"Register_no"=>"15612422052","University"=>"Atmiya"));

echo '<table border=1>';
echo '<tr><th>Rollno</th><th>Name</th><th>City</th><th>Country</th><th>age</th><th>Department</th><th>Division</th><th>Enrollment</th><th>Register_no</th><th>University</th></tr>';
foreach( $students_master as $student_master )
{
	echo '<tr>';
	foreach($student_master as $key)
	{
		echo '<td>'.$key.'</td>';
	}
	echo '</tr>';
}


echo '</table>'

?>


