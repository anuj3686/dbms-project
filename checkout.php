<?php
$servername = "localhost";
$username = "id2967876_hotel_db";
$password = "12345678";
$dbname = "id2967876_hotel_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);



$userid =$_POST['userid'];
echo $userid;
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
$sql2="UPDATE room SET STATUS=0 WHERE ROOM_NO='$userid'";
 if(mysqli_query($conn, $sql2))
     {}
     else{
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
$sql="DELETE FROM Date WHERE ROOM_NO='$userid'";

 if(mysqli_query($conn, $sql))
     {}
     else{
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }echo '<script type="text/javascript">alert("user checked out");</script>';
echo '<script type="text/javascript">window.location.assign("https://hardback-completion.000webhostapp.com/Admin-Login/")</script>';
exit;
?>