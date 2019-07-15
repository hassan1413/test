<?php
$host = "eu-cdbr-west-02.cleardb.net";
$user = "b232eead1e1431";
$password = "698aa893";
$db = "heroku_b6d14ed2f75980f";

$con = mysql_connect($host,$user,$password,$db);

if($con){

    echo json_encode($response);
}
    $username = $_POST["username"];
    $first_name = $_POST["first_name"];
    $last_nmae = $_POST["last_nmae"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $password = $_POST["password"];



    $statement = mysqli_prepare($con, "INSERT INTO user (username, first_name, last_nmae, phone_number,email,password) VALUES (?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_parأam($statement, "siss", $username, $first_name, $last_nmae, $phone_number, $email, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
?>
