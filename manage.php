<?php 
echo file_get_contents("modules/head1.html"); 
echo "Browse";
echo file_get_contents("modules/head2.html");
echo file_get_contents("modules/header.html");
echo file_get_contents("modules/navigation.html");
echo '<div id="mainbody">';
?>

<div class="blob" style="float: left">
<?php
    require "database/config.php";
    if($connected){
        echo "Database status: <strong style='color:green'>Connected</strong>" ;
    }
    else {
        echo "Database status: <strong style='color:red'>Disconnected</strong>" ;
    }
    
?>
<br><br><br>
<form method="post">
    <input type="submit" name="reset" value="Reset Database">
</form>
<?php 
if(isset($_POST["reset"])){
    resetdb();
}
?>
</div>



<?php
echo '</div>';
echo file_get_contents("modules/footer.html");
?>