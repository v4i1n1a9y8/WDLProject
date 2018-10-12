<?php 
include "modules/head1.php";
echo "About";
echo file_get_contents("modules/head2.html");
echo file_get_contents("modules/header.html");
include "modules/navigation.php";
echo '<div id="mainbody">';
?>

<div class="block" style="width:950px;height:500px">
about
nothing yet...
</div>
<?php
echo '</div>';
echo file_get_contents("modules/footer.html");
?>