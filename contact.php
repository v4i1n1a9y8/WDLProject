<?php 
include('database/dbconnect.php');
session_start();

echo file_get_contents("modules/head1.html");
echo "contact";
echo file_get_contents("modules/head2.html");
echo file_get_contents("modules/header.html");
include "modules/navigation.php";
echo '<div id="mainbody">';
?>


<div class="block" style="width:950px;height:500px">
contact
nothing yet...
</div>


<?php
echo '</div>';
echo file_get_contents("modules/footer.html");
?>