<?php

$servername = "localhost:";
$username = "root";
$password = "root";
$dbname   = "compare";

$conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);

function resetdb() {
    global $conn,$dbname;
    $conn->exec("
    DROP DATABASE IF EXISTS $dbname;
    CREATE DATABASE $dbname;
    USE $dbname;

    CREATE TABLE users(
        user_id int PRIMARY KEY AUTO_INCREMENT,
        username varchar(32) ,
        password varchar(200)
    );");

    $stmt=$conn->prepare("INSERT INTO users (username,password) VALUES(?,?)");
    $stmt->execute(["vinay",password_hash("password", PASSWORD_DEFAULT)]);
    $stmt->execute(["rakesh",password_hash("password", PASSWORD_DEFAULT)]);
    $stmt->execute(["prasad",password_hash("password", PASSWORD_DEFAULT)]);
    
    $conn->exec("
    CREATE TABLE mobiles(
        mobile_id int PRIMARY KEY AUTO_INCREMENT,
        name varchar(32),
        company varchar(32),
        os varchar(32),
        processor varchar(32),
        ram varchar(32),
        image varchar(32)
    );
    ");

    $stmt=$conn->prepare("INSERT INTO mobiles (name,company,os,processor,ram,image) VALUES(?,?,?,?,?,?)");
    $stmt->execute(["Honor 7x","Huawei","android","Kirin 659","4GB","images/honor7x.jpg"]);
    $stmt->execute(["Nexus 6p","Huawei","android","Snapdragon 810","3GB","images/nexus6p.jpeg"]);
    }
?>