<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname =  "attendance";
$conn;

// CONNECT TO DB
function connect(){
    global $servername, $username, $password, $dbname, $conn;
    $conn = mysqli_connect($servername,$username,$password,$dbname);
}
// DISCONNECT TO DB
function disconnect(){
    global $conn;
    mysqli_close($conn);
}
// VALIDATION OF INPUT FOR WHITE SPACES AND SPECIAL CHARACTERS
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// INSERT TO TEACHERS
function login($email, $pass){
    global $conn;
    connect();
    $result = mysqli_query($conn, "SELECT * FROM accounts WHERE email = '$email' AND password = '$pass'");
    $row = mysqli_fetch_all($result);
    disconnect();
    return $row;
}

?>