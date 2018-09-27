<?php 
echo file_get_contents("modules/head1.html"); 
echo "Compare";
echo file_get_contents("modules/head2.html");
echo file_get_contents("modules/header.html");
echo file_get_contents("modules/navigation.html");
echo '<div id="mainbody">';
?>

<div class="blob">
<h3>LOGIN</h3>
<hr>
<form method="post">
Name:       <input type="text" name="name"      ><br><hr>
Password:   <input type="text" name="password"   ><br><hr>
<input type="submit" name="login" value="login">
</form>
<?php
require_once "database/config.php";
if(isset($_POST["login"])){
    usedb();
    $admin=false;
    $loggedin=false;
    try {
        $sql = sprintf("select password,type from users where name='%s'"
                ,$_POST["name"]);
        $statement = $conn->query($sql);
        $var = $statement->fetch();
        if($var>0 && $var[0]==$_POST["password"])
        {
            $loggedin=true;
        }
        if($var>0 && $var[1]=="admin")
        {
            $admin=true;
            echo "lol";
        }
        unset($_POST["login"]);
    }
    catch (PDOException $e) {
        $loggedin=true;
        echo $sql." ".$e->getMessage();
    }
    if($loggedin) {
        echo "<script type='text/javascript'>alert('done');</script>";
    }
    else {
        echo "<script type='text/javascript'>alert('notdone');</script>";
    }
}
?>
</div>


<?php
echo '</div>';
echo file_get_contents("modules/footer.html");
?>