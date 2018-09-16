<?php 
echo file_get_contents("modules/head1.html"); 
?>
HOME</title>
<style>
div.tab {
    border: 2px solid lightblue;
    border-radius: 20px;

    position: relative;
    width: 300px;
    height: 200px;
    background: #aaa;
    color: #000;
    padding: 20px;  
}
a.tablink:link,a.tablink:visited,a.tablink:hover,a.tablink:active {
    color: #ddd;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 10;
    font-size:40px;
}
div.tab:hover {
    background-color: #ccc;
}
</style>
<?php 
echo file_get_contents("modules/head2.html");
echo file_get_contents("modules/header.html");
echo file_get_contents("modules/navigation.html");
echo '<div id="mainbody">';
?>

<div style="float:right;">
    <div class="tab">
    <p><a href="browse.php" class="tablink">
        BROWSE
    </a></p>
    </div>
    <div class="tab">
    <p><a href="compare.php" class="tablink">
        COMPARE
    </a></p>
    </div>
</div>

<?php
echo '</div>';
echo file_get_contents("modules/footer.html");
?>