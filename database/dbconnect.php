<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname   = "compare";

$mobile1 = 1;
$mobile2 = 2;

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
    addmobile("Honor 8x","Huawei","android","Kirin 659","4GB","16+2","12,999","64gb","3300mah","images/honor8x.jpeg");
    addmobile("Realme 2 Pro","Huawei","android","Kirin 659","4GB","16+2","12,999","64gb","3300mah","images/realme2pro.jpeg");
    addmobile("Mi A2","Huawei","android","Kirin 659","4GB","16+2","12,999","64gb","3300mah","images/mia2.jpeg");
    addmobile("Nokia","Huawei","android","Kirin 659","4GB","16+2","12,999","64gb","3300mah","images/nokia.jpeg");


    $conn->exec("
    CREATE TABLE favourites(
        user_id int(32),
        mobile_id int(32)
    );
    ");
}
function addmobile($name,$company,$os,$processor,$ram,$camera,$price,$storage,$batterysize,$image){
    global $conn;
    $stmt=$conn->prepare("INSERT INTO mobiles (name,company,os,processor,ram,camera,price,storage,batterysize,image) VALUES(?,?,?,?,?,?,?,?,?,?)");
    $stmt->execute([$name,$company,$os,$processor,$ram,$camera,$price,$storage,$batterysize,$image]);
}

function addfav($uid,$mid){
    global $conn;
    $statement = $conn->prepare("SELECT * FROM favourites WHERE user_id=? and mobile_id=?");
    $statement->execute([$uid,$mid]);
    $count = $statement->rowCount();
    if($count>0 ){
        return;
    }
    $stmt=$conn->prepare("INSERT INTO favourites (user_id,mobile_id) VALUES (?,?)");
    $stmt->execute([$uid,$mid]);
}
function delfav($uid,$mid){
    global $conn;
    $statement = $conn->prepare("SELECT * FROM favourites WHERE user_id=? and mobile_id=?");
    $statement->execute([$uid,$mid]);
    $count = $statement->rowCount();
    if($count==0 ){
        return;
    }
    $stmt=$conn->prepare("DELETE FROM favourites where user_id=? and mobile_id=?");
    $stmt->execute([$uid,$mid]);
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