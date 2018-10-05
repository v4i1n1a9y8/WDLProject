<?php 
echo file_get_contents("modules/head1.html"); 
echo "Browse";
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
        $array = $conn->query($sql)->fetchall(PDO::FETCH_ASSOC);
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }

?>
<div class="blob" style="padding-left:80px;">
<a class="blob mobile" href="browse.php">
    <div >
<img src="images/nexus6p.jpeg" style="
    width:100px;
    height:90px;">
    </div>
Honor7x
</a>

<a class="blob mobile" href="browse.php">
<img src="css/phone.png" style="width:30%;height:30%">
Honor7x
</a>
<a class="blob mobile" href="browse.php">
<img src="css/phone.png" style="width:30%;height:30%">
Honor7x
</a>
<a class="blob mobile" href="browse.php">
<img src="css/phone.png" style="width:30%;height:30%">
Honor7x
</a>
<a class="blob mobile" href="browse.php">
<img src="css/phone.png" style="width:30%;height:30%">
Honor7x
</a>
<a class="blob mobile" href="browse.php">
<img src="css/phone.png" style="width:30%;height:30%">
Honor7x
</a>
</div>
<?php
echo '</div>';
echo file_get_contents("modules/footer.html");
?>