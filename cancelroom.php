<?php

session_start();
$servername = "localhost";
$username = "id2967876_hotel_db";
$password = "12345678";
$dbname = "id2967876_hotel_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);



$userid =$_POST['room'];

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
$uid= $_SESSION['USER_ID'];

    $sql3= "SELECT * FROM `Date` WHERE ROOM_NO='$userid' AND USER_ID='$uid' ";
    $result= mysqli_query($conn, $sql3);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $m=$row["USER_ID"];
    //echo $m;
    //echo $uid;
    
if($count>=1){

$sql2="DELETE FROM `Date1` WHERE ROOM_NO='$userid' AND USER_ID='$uid' ";
 if(mysqli_query($conn, $sql2))
     {}
     else{
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
$sql="DELETE FROM `Date` WHERE ROOM_NO='$userid' AND USER_ID='$uid' ";
$result= mysqli_query($conn, $sql);
echo '<script type="text/javascript">alert("booking cancelled");</script>';
}
else{
echo '<script type="text/javascript">alert("you cant cancel this room!!!");</script>';    
}

echo '<script type="text/javascript">window.location.assign("https://hardback-completion.000webhostapp.com/booking/")</script>';
exit;
?>