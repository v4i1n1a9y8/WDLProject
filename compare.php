<?php 
echo file_get_contents("modules/head1.html"); 
echo "Compare";
echo file_get_contents("modules/head2.html");
echo file_get_contents("modules/header.html");
echo file_get_contents("modules/navigation.html");
echo '<div id="mainbody">';
?>

<?php
echo '</div>';
echo file_get_contents("modules/footer.html");
?>