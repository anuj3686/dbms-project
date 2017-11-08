<?php
session_start();
$servername = "localhost";
$username = "id2967876_hotel_db";
$password = "12345678";
$dbname = "id2967876_hotel_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo <<<EOF
<script>
var win = window.open('about:blank');
var doc = win.document;
doc.write('1234');
</script>
EOF;
} 
?>