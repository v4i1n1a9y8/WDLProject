<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname   = "compare";

$conn = new PDO("mysql:host=$servername", $username, $password);
$conn->exec("use $dbname");
function resetdb() {
    global $conn,$dbname;
    $conn->exec("
    DROP DATABASE IF EXISTS $dbname;
    CREATE DATABASE $dbname;
    USE $dbname;

    CREATE TABLE users(
        user_id int PRIMARY KEY AUTO_INCREMENT,
        username varchar(32) ,
        password varchar(200),
        type varchar(32)
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
        camera varchar(32),
        price varchar(32),
        storage varchar(32),
        batterysize varchar(32),
        image varchar(32)
    );
    ");
    /*
    $stmt=$conn->prepare("INSERT INTO mobiles (name,company,os,processor,ram,image) VALUES(?,?,?,?,?,?)");
    $stmt->execute(["Honor 7x","Huawei","android","Kirin 659","4GB","images/honor7x.png"]);
    $stmt->execute(["Nexus 6p","Huawei","android","Snapdragon 810","3GB","images/nexus6p.png"]);
    $stmt->execute(["Redmi Note 5 Pro","Xiaomi","android","Snapdragon 636","4GB","images/note5pro.jpeg"]);
    }*/
    addmobile("Honor 7x","Huawei","android","Kirin 659","4GB","16+2","12,999","64gb","3300mah","images/honor7x.png");
    addmobile("Honor 7x","Huawei","android","Kirin 659","4GB","16+2","12,999","64gb","3300mah","images/honor7x.png");
    addmobile("Honor 7x","Huawei","android","Kirin 659","4GB","16+2","12,999","64gb","3300mah","images/honor7x.png");
    addmobile("Honor 7x","Huawei","android","Kirin 659","4GB","16+2","12,999","64gb","3300mah","images/honor7x.png");
    addmobile("Honor 7x","Huawei","android","Kirin 659","4GB","16+2","12,999","64gb","3300mah","images/honor7x.png");
}
function addmobile($name,$company,$os,$processor,$ram,$camera,$price,$storage,$batterysize,$image){
    global $conn;
    $stmt=$conn->prepare("INSERT INTO mobiles (name,company,os,processor,ram,camera,price,storage,batterysize,image) VALUES(?,?,?,?,?,?,?,?,?,?)");
    $stmt->execute([$name,$company,$os,$processor,$ram,$camera,$price,$storage,$batterysize,$image]);
}

function getUserName($id){
    global $conn;
    $stmt=$conn->prepare("select username from users where user_id=$id");
    $stmt->execute();
    $result = $stmt->fetch();
    return $result['username'];
}
function addUser($username,$password) {
    global $conn;
    $stmt=$conn->prepare("INSERT INTO users (username,password) VALUES(?,?)");
    $stmt->execute([$username,password_hash($password, PASSWORD_DEFAULT)]);
}
?>