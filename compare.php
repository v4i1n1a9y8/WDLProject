<?php 
echo file_get_contents("modules/head1.html"); 
echo "Compare";
echo file_get_contents("modules/head2.html");
echo file_get_contents("modules/header.html");
echo file_get_contents("modules/navigation.html");
echo '<div id="mainbody">';
?>

hi<br>
<?php
$servername = "localhost";
$username = "root";
$password = "admin@123";
$dbname = "mobiles";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, processor FROM phones";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["processor"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 



<?php
echo '</div>';
echo file_get_contents("modules/footer.html");
?>