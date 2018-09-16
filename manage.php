<?php 
echo file_get_contents("modules/head1.html"); 
echo "Browse";
echo file_get_contents("modules/head2.html");
echo file_get_contents("modules/header.html");
echo file_get_contents("modules/navigation.html");
echo '<div id="mainbody">';
?>

<div class="blob" style="float: left">

<?php
    require "data/config.php";
    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Database status: <strong style='color:green'>Connected</strong>" ;
        }
    catch(PDOException $e)
        {
            echo "Database status: <strong style='color:red'>Disconnected</strong>" ;
        }
?>

<br><br><br>
<form method="post">
    <input type="submit" name="reset" value="Reset Database">
</form>
<?php 
if(isset($_POST["reset"])){
    try {
        $sql = sprintf("DROP DATABASE %s",$dbname);
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
?>
</div>



<?php
echo '</div>';
echo file_get_contents("modules/footer.html");
?>