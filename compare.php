<?php 
include "modules/head1.php";
echo "Compare";
echo file_get_contents("modules/head2.html");
echo file_get_contents("modules/header.html");
include "modules/navigation.php";
echo '<div id="mainbody">';
?>

<?php    
    try {
        require_once "database/config.php";
        usedb();
        $sql = "SELECT name,company,processor,ram from mobiles";
        $statement = $conn->query($sql);
        $array = $statement->fetchall(PDO::FETCH_ASSOC);
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }

    foreach ($array as $mobile) {
    }
?>




<?php
echo '</div>';
echo file_get_contents("modules/footer.html");
?>