<?php 
echo file_get_contents("modules/head1.html"); 
echo "Browse";
echo file_get_contents("modules/head2.html");
echo file_get_contents("modules/header.html");
echo file_get_contents("modules/navigation.html");
echo '<div id="mainbody">';
?>

<div id="blob" style="float: left">
 <?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database status: <strong style='color:green'>Connected</strong>" ;
    }
catch(PDOException $e)
    {
        echo "Database status: <strong style='color:red'>Disconnected</strong>" ;
    }
?>
</div>

<?php
echo '</div>';
echo file_get_contents("modules/footer.html");
?>