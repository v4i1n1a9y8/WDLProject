<?php 
echo file_get_contents("modules/head1.html"); 
?>
HOME</title>
<style>

</style>
<?php 
echo file_get_contents("modules/head2.html");
echo file_get_contents("modules/header.html");
echo file_get_contents("modules/navigation.html");
echo '<div id="mainbody">';
?>

<div style="float:right;">
    <a href="index.php" class="blob" style="font-size:40px;">
        HOME
    </a>
    <a href="browse.php" class="blob" style="font-size:40px;">
        BROWSE
    </a>
    <a href="compare.php" class="blob " style="font-size:40px;">
        COMPARE
    </a>
</div>
<div style="float:left;">
    <div class="blob" style="width:650px;height:1000px">
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