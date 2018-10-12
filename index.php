<?php 
include "modules/head1.php";
echo "HOME";
echo file_get_contents("modules/head2.html");
echo file_get_contents("modules/header.html");
include "modules/navigation.php";
echo '<div id="mainbody">';
?>

<div class="block"  style="overflow:hidden;width:30%;height:40%;float:right;padding-top:0px;padding-bottom:0px">
    <h3>Updates</h3>
    <hr>
    <marquee direction = "up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
        officia deserunt mollit anim id est laborum.</marquee>
</div>
<div style="float:left;">
    <div class="block" style="width:650px;height:1000px">
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
        officia deserunt mollit anim id est laborum.
    </p>
    </div>
</div>
<?php
echo '</div>';
echo file_get_contents("modules/footer.html");
?>