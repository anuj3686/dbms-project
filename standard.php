<?php

session_start();


$servername = "localhost";
$username = "id2967876_hotel_db";
$password = "12345678";
$dbname = "id2967876_hotel_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);



$start_date =$_POST['start_date'];
$end_date=$_POST['end_date'];
$no_room = $_POST['no_room'];

//echo $start_date;
//echo $end_date;
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
    $sql5="SELECT DATEDIFF ('$end_date','$start_date') as answer ";
    $result= mysqli_query($conn, $sql5);
    $row = mysqli_fetch_assoc($result);
    $m=$row["answer"];
    if($m>0){
if (isset($_POST['Submit'])) {
    

$sql= "SELECT * FROM Date where (ROOM_NO<100 AND '$start_date'<=`START_DATE` AND '$end_date'>=`END_DATE`) OR (ROOM_NO<100 AND '$start_date'>=`START_DATE` AND '$end_date'<=`END_DATE`) OR (ROOM_NO<100 AND '$start_date'<=`START_DATE` AND '$end_date'<=`END_DATE` AND '$end_date'>=`START_DATE`) OR (ROOM_NO<100 AND '$start_date'>=`START_DATE` AND '$end_date'>=`END_DATE` AND '$start_date'<=`END_DATE`)";
$sql2 = "SELECT * FROM `room` WHERE ROOM_NO <100";
$count=44;
 if(mysqli_query($conn, $sql))
     {
         //echo "Query works";
         $result= mysqli_query($conn, $sql);
     $count = mysqli_num_rows($result);
     }
     else{
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

$result2= mysqli_query($conn, $sql2);
$count2 = mysqli_num_rows($result2);

$count = $count2 - $count;
echo '<script type="text/javascript">alert("Available Rooms:' . $count . '")</script>';
echo '<script type="text/javascript">window.location.assign("https://hardback-completion.000webhostapp.com/Rooms")</script>';


}
else{
    
$sql= "SELECT * FROM Date where (ROOM_NO<100 AND '$start_date'<=`START_DATE` AND '$end_date'>=`END_DATE`) OR (ROOM_NO<100 AND '$start_date'>=`START_DATE` AND '$end_date'<=`END_DATE`) OR (ROOM_NO<100 AND '$start_date'<=`START_DATE` AND '$end_date'<=`END_DATE` AND '$end_date'>=`START_DATE`) OR (ROOM_NO<100 AND '$start_date'>=`START_DATE` AND '$end_date'>=`END_DATE` AND '$start_date'<=`END_DATE`)";
$sql2 = "SELECT * FROM `room` WHERE ROOM_NO <100";
$count=44;
 if(mysqli_query($conn, $sql))
     {

         $result= mysqli_query($conn, $sql);
     $count = mysqli_num_rows($result);
     }
     else{
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
$result2= mysqli_query($conn, $sql2);
$count2 = mysqli_num_rows($result2);

$count = $count2 - $count;

if($count<$no_room){
    echo '<script type="text/javascript">alert("no rooms avalable")</script>';
    echo '<script type="text/javascript">window.location.assign("https://hardback-completion.000webhostapp.com/Rooms")</script>';
}
$ri=$no_room;
while($no_room >0 ){
    $sql= "SELECT * from `room` where ROOM_NO <100 AND ROOM_NO NOT IN (SELECT ROOM_NO FROM Date where (ROOM_NO <100 AND '$start_date'<=`START_DATE` AND '$end_date'>=`END_DATE`) OR (ROOM_NO <100 AND '$start_date'>=`START_DATE` AND '$end_date'<=`END_DATE`) OR (ROOM_NO <100 AND '$start_date'<=`START_DATE` AND '$end_date'<=`END_DATE` AND '$end_date'>=`START_DATE`) OR (ROOM_NO <100 AND '$start_date'>=`START_DATE` AND '$end_date'>=`END_DATE` AND '$start_date'<=`END_DATE`))";
    $result= mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
$m=$row["ROOM_NO"];
$p = $row["TERRIF"];
   // echo  $_SESSION['USER_ID'] . " ";
   // echo $m;
   // echo $p;
    
    $uid= $_SESSION['USER_ID'];
    $sql3="INSERT INTO Date values('$m' ,'$start_date' , '$end_date' ,'$uid') ";
    
    $sql4= "INSERT INTO Date1 values('$m' ,'$start_date' , '$end_date' ,'$uid')";
    
     if(mysqli_query($conn, $sql3))
     {}
     else{
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     
       if(mysqli_query($conn, $sql4))
     {}
     else{
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $no_room= $no_room -1;
}
$sql5="SELECT DATEDIFF ('$end_date','$start_date') as answer ";
    $result= mysqli_query($conn, $sql5);
    $row = mysqli_fetch_assoc($result);
    $m=$row["answer"];


$paid=$ri*$p*$m;
    echo '<script type="text/javascript">alert("Rooms Booked:' . $ri . '")</script>';
    echo '<script type="text/javascript">alert("Amount to be paid:' . $paid . '")</script>';
    echo '<script type="text/javascript">window.location.assign("https://hardback-completion.000webhostapp.com/booking")</script>'; 
}
}
else
{
    echo '<script type="text/javascript">alert("invalid dates")</script>';
        echo '<script type="text/javascript">window.location.assign("https://hardback-completion.000webhostapp.com/Rooms")</script>';
}
//exit;
?>