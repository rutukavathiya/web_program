<html>
<head>
<style> 

input[type=text]{
  border: 3px solid #960018;
}
</style>
</head>
<body>
<form>
<table  align="center" bgcolor="#e9ded6">

<tr><td colspan=2><b><center>Registration Form</td></tr>
<tr><td>username:</td><td><input type="text" name="username"/></td></tr>
<tr><td>password:</td><td><input type="text" name="password"/></td></tr>
<tr><td>name:</td><td><input type="text" name="name"/></td></tr>
<tr><td>address:</td><td><input type="text" name="address"/></td></tr>
<tr><td>country:</td><td><select name=drop-down" /><option value="select country name">select country name</option>
<option value="india">india</option><br>
<option value="canada">canada</option><br>
<option value="south korea">south korea</option></select></td></tr>
<tr><td>zip code:</td><td><input type="text" name="zip coad"/></td></tr>
<tr><td>email:</td><td><input type="text" name="email"/></td></tr>
<tr><td>sex:</td><td><input type="radio" name="gender" value="male" checked>male
    <input type="radio" name="gender" value="female">female</td></tr>
<tr><td>language:</td><td><input type="checkbox" name="language" checked />English
         <input type="checkbox" name="language"/>Non English</td></tr></td>
<tr><td>about:</td><td><textarea cols="20" rows="5"/></textarea></td></tr>
<tr><td><input type="submit" name="submit"></td></tr>
</form>
</body>
</html>




<?php


?>