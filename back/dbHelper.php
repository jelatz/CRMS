<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname =  "";
$conn;

function connect(){
    global $servername, $username, $password, $dbname, $conn;
    $conn = mysqli_connect($servername,$username,$password,$dbname);
}

function disconnect(){
    global $conn;
    mysqli_close($conn);
}

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>