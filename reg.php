<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="reg.css">
</head>
<body>
<form action="conn.php" method="post" name="form">
<strong>
    <div class="a"><h1>Register Now..</h1></div>
<div>
First Name: <input type="text" name="fname">
</div>
<br>
<div>
Last Name: <input type="text" name="lname">
</div>
<br>
<div>
Mobile No: <input type="number" name="mobileno" >
</div>
<br>
<div>
Email: <input type="email" name="email" >
</div>
<br>
<div>
Address: <br><textarea name="address" id="" cols="55" rows="10"></textarea>
</div>
<br>
<div>
Gender: &nbsp; Male <input type="radio" name="gender">
Female: <input type="radio" name="gender">
Other: <input type="radio" name="gender">
</div>
<br>
<br>
<br>
<br><br>
<center>
<input type="submit" value="Submit Now"> &nbsp;
<input type="reset" value="Reset Now">
</center>
</strong>
</form>
</body>
</html>