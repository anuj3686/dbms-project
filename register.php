<?php
$servername = "localhost";
$username = "id2967876_hotel_db";
$password = "12345678";
$dbname = "id2967876_hotel_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

if($_POST)
{
$fname = $_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$address=$_POST['adress'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$r_date=$_POST['rdate'];
$dob=$_POST['date'];
$contact=$_POST['contact'];
$emailID=$_POST['email'];
$status=$_POST['status'];
$u_name=$_POST['uname'];
$password=$_POST['password'];




$sql = "INSERT INTO client VALUES ('0','$fname','$lname','$gender','$address','$city','$state','$pincode','$dob','$emailID','$contact','$r_date','$status')";
$sql_max = "SELECT MAX(USER_ID) as max_x FROM client";



//$sql = "Insert INTO client values ( '0' , 'Dean','thomas','male','50,3rd corss','bangalore','kar','566666','1997/12/12','veveve','94809','2017/04/13','0')";

//$sql2 = "INSERT into login values (SELECT MAX(USER_ID) FROM client,'123' , 'veveve','password' )";


if (mysqli_query($conn, $sql)) {
echo '<script type="text/javascript">alert("Registration successful.");</script>';
echo '<script type="text/javascript">window.location.assign("https://hardback-completion.000webhostapp.com")</script>';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$result = mysqli_query($conn, $sql_max);
$row = mysqli_fetch_assoc($result);
$m=$row["max_x"];

$sql2= "INSERT INTO login VALUES ( ".$m .  ",'$u_name','$emailID','$password') ";

if (mysqli_query($conn, $sql2)) {
echo '<script type="text/javascript">alert("login entry successful.");</script>';
echo '<script type="text/javascript">window.location.assign("https://hardback-completion.000webhostapp.com")</script>';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

?>
