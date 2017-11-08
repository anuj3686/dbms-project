<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
session_start();
$servername = "localhost";
$username = "id2967876_hotel_db";
$password = "12345678";
$dbname = "id2967876_hotel_db";

//echo "Hello world";
$conn = mysqli_connect($servername, $username, $password, $dbname);


if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
$uid= $_SESSION['USER_ID'];
$q = $_REQUEST["q"];

if($q=='123'){
    //echo "Hiiiii";
    echo "Your Name : ". $_SESSION['F_NAME']."<br>";
    echo "Your USER ID :".$_SESSION['USER_ID']."<br>";
    
}
elseif($q=='21'){
$sql="SELECT * FROM Date WHERE USER_ID='$uid'   ";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>Room No</th>
<th>Start Date</th>
<th>End Date</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['ROOM_NO'] . "</td>";
    echo "<td>" . $row['START_DATE'] . "</td>";
    echo "<td>" . $row['END_DATE'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";
}

elseif($q=='333'){
    $sql="SELECT * FROM Date1 a ,client b  WHERE a.USER_ID=b.USER_ID ";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>User ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Room no</th>
<th>Start Date</th>
<th>End Date</th>
<th>Email ID</th>
<th>Contact</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['USER_ID'] . "</td>";
      echo "<td>" . $row['F_NAME'] . "</td>";
    echo "<td>" . $row['L_NAME'] . "</td>";
    
    echo "<td>" . $row['ROOM_NO'] . "</td>";
    echo "<td>" . $row['START_DATE'] . "</td>";
    echo "<td>" . $row['END_DATE'] . "</td>";
      echo "<td>" . $row['EMAIL_ID'] . "</td>";
    echo "<td>" . $row['CONTACT_NO'] . "</td>";
    
   
    
    echo "</tr>";
}
echo "</table>";
}
mysqli_close($conn);
?>
</body>
</html>