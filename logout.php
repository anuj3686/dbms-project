<?php
session_start();
$servername = "localhost";
$username = "id2967876_hotel_db";
$password = "12345678";
$dbname = "id2967876_hotel_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$q = $_REQUEST["q"];

$loggedin='false';
if ($_SESSION['USER_ID']) {
  $loggedin = 'true';
} else {
  $loggedin = 'false';
}
if($q==1){
    if($loggedin=='true'){
        echo '<button onclick="send_logout()" style="width:auto;">Logout</button>';
    }
    
}
else if($q==2){
session_unset(); 
session_destroy();
 
}

?>