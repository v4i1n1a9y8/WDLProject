<?php 
echo file_get_contents("modules/head1.html"); 
echo "About";
echo file_get_contents("modules/head2.html");
echo file_get_contents("modules/header.html");
include "modules/navigation.php";
echo '<div id="mainbody">';
?>

<div class="blob" style="width:950px;height:500px">
about
nothing yet...
</div>
<?php
echo '</div>';
echo file_get_contents("modules/footer.html");
?>