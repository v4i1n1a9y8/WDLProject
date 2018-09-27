<?php 
echo file_get_contents("modules/head1.html"); 
echo "Browse";
echo file_get_contents("modules/head2.html");
echo file_get_contents("modules/header.html");
include "modules/navigation.php";
echo '<div id="mainbody">';
?>

<div class="blob" >
<?php
    require_once "database/config.php";
    if($connected){
        echo "Database status: <strong style='color:green'>Connected</strong>" ;
    }
    else {
        echo "Database status: <strong style='color:red'>Disconnected</strong>" ;
    }
    
?>
<br><br><br>
<form method="post">
    <input style="color:black" type="submit" name="reset" value="Reset Database">
</form>
<?php 
if(isset($_POST["reset"])){
    resetdb();
    unset($_POST["reset"]);
}
?>
<br><br><br>
<form method="post">
    <input style="color:black" type="submit" name="deletecookies" value="Delete Cookies">
</form>
<?php 
if(isset($_POST["deletecookies"])){
    if(isset($_COOKIE["token"])){
        setcookie("token",'',time() + (86400 * 30),"/");
    }
}
?>
</div>

<div class="blob">
<h3>Add a new mobile</h3>
<hr>
<form method="post">
Name:       <input type="text" name="name"      ><br><hr>
Company:    <input type="text" name="company"   ><br><hr>
Processor:  <input type="text" name="processor" ><br><hr>
Ram:        <input type="text" name="ram"       ><br><hr>
<input style="color:black" type="submit" name="insert" value="Add">
</form>
<?php
if(isset($_POST["insert"])){
    addmobile($_POST["name"],$_POST["company"],$_POST["processor"],$_POST["ram"]);
}
?>
</div>
<?php
echo '</div>';
echo file_get_contents("modules/footer.html");
?>