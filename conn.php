<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "info";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
echo "Connection was successful<br>";
}
$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$mno=$_POST['mobileno'];
$email_id=$_POST['email'];
$addr=$_POST['address'];
$gen=$_POST['gender'];
$sql="INSERT INTO `info1` (`First Name`,`Last Name`,`Mobile`,`Email`,`Address`,`Gender`)
VALUES ('$f_name','$l_name','$mno','$email_id','$addr','$gen')";
if (!mysqli_query($conn, $sql))
{
die("Sorry we failed to connect: ". mysqli_connect_error());
}
else
{
echo "1 record added";
}
echo "<br><br>";
echo "You want to register another user, Click <a href='reg.php'>here</a>";
mysqli_close($conn);
?>