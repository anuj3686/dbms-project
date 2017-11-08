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

if($_POST)
{
$uname = $_POST['username'];
$pass = $_POST['password'];
if($uname=='admin'){
    if($pass=='admin'){
     echo '<script type="text/javascript">window.location.assign("https://hardback-completion.000webhostapp.com/Admin-Login")</script>'; 
    }
}
    

$sql = "SELECT * FROM `login` WHERE EMAIL_ID='$uname' AND PASSWORD='$pass'";
$result = mysqli_query($conn,$sql);
$row  = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
$link="https://hardback-completion.000webhostapp.com/";



    if($count==1)
    {
        
        $_SESSION['USER_ID'] = $row['USER_ID'];
        $uid= $row['USER_ID'];
        $sql2 ="SELECT * FROM client WHERE  USER_ID='$uid' ";
        echo '<script type="text/javascript">alert("login successful");</script>';
        $result2 = mysqli_query($conn,$sql2);
        $row2  = mysqli_fetch_array($result2);
        $_SESSION['F_NAME']=$row2['F_NAME'];
        $_SESSION['L_NAME']=$row2['L_NAME'];
        //echo $_SESSION['USER_ID'];
        echo '<script type="text/javascript">window.location.assign("https://hardback-completion.000webhostapp.com/Rooms")</script>';
        exit;
    }
    else
    {
        echo '<script type="text/javascript">alert("login unsuccessful");</script>';
    }

}
?>