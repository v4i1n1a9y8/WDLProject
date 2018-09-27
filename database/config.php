<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname   = "compare";
$connected = false;
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    #$conn = new PDO("mysql:host=localhost", "root", "root");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    #echo "Database status: <strong style='color:green'>Connected</strong>" ;
    $connected=true;
    }
catch(PDOException $e)
    {
        #echo "Database status: <strong style='color:red'>Disconnected</strong>" ;
        $connected=false;
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
?>