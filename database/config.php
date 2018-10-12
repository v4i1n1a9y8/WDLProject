<?php

$servername = "localhost";
$username = "root";
$password = "admin@123";
$dbname   = "compare";
$connected = false;
$admin = false;
$loggedin = false;
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    #$conn = new PDO("mysql:host=localhost", "root", "root");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    #echo "Database status: <strong style='color:green'>Connected</strong>" ;
    $connected=true;

    if(isset($_COOKIE["token"])){
        usedb();
        try {
        $sql = sprintf("select username,password,type from users where token='%s'"
        ,$_COOKIE["token"]);
        $statement = $conn->query($sql);
        $var = $statement->fetch();
        #echo $var[0]."<br>";
        #echo $var[1]."<br>";
        #echo $var[2];
        if($var !=null){
        if(sizeof($var)>1){
            if($var[2]=="admin")
            {
                $admin=true;
            }
            $loggedin = true;
            #echo $admin;
        }}
        }
        catch(PDOException $e){
            echo $sql." ".$e->getMessage();
            $loggedin = false;
        }
    }
    }
catch(PDOException $e)
    {
        #echo "Database status: <strong style='color:red'>Disconnected</strong>" ;
        $connected=false;
        echo $e->getMessage();
    }
function resetdb(){
    global $conn,$dbname;
    try {
        echo $connected;
        $sql = sprintf("DROP DATABASE IF EXISTS %s",$dbname);
        $conn->exec($sql);
        $sql = sprintf("CREATE DATABASE %s",$dbname);
        $conn->exec($sql);
        $sql = "USE ".$dbname."; CREATE TABLE mobiles (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30) NOT NULL,
            company VARCHAR(30) NOT NULL,
            processor VARCHAR(50),
            ram VARCHAR(50),
            date TIMESTAMP
            )";
        $conn->exec($sql);
        $sql = "CREATE TABLE users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL,
            password VARCHAR(30) NOT NULL,
            type VARCHAR(50),
            token VARCHAR(200)
            )";
        $conn->exec($sql);
        $sql = "INSERT INTO users (username,password,type) values ('root','password','admin')";
        $conn->exec($sql);
        $sql = "INSERT INTO users (username,password,type) values ('vinay','vinay','none')";
        $conn->exec($sql);
        $sql = "INSERT INTO mobiles (name, company,processor,ram,date)
                VALUES ('Honor7X', 'Huawei', 'kirin 659','4gb',now())";
        $conn->exec($sql);
        $sql = "INSERT INTO mobiles (name, company,processor,ram,date)
                VALUES ('Honor10', 'Apple', 'kirin infinite','1000gb',now())";
        $conn->exec($sql);
    }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
}
function usedb() {
    global $conn,$dbname;
    $sql = "USE ".$dbname;
    $conn->exec($sql);
}
function addmobile($name,$company,$processor,$ram){
    global $conn,$dbname;
    usedb();
    try {
        $sql = sprintf("INSERT INTO mobiles (name,company,processor,ram) values('%s','%s','%s','%s')"
                ,$name
                ,$company
                ,$processor
                ,$ram);
        $conn->exec($sql);
    }
    catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}

function getUname() {
    global $conn,$dbname;
    usedb();
    $sql = sprintf("select username from users where token='%s'"
                ,$_COOKIE["token"]);
    $statement = $conn->query($sql);
    $var = $statement->fetch();
    return $var[0];
}

?>