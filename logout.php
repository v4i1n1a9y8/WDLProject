<?php
    if(isset($_COOKIE["token"])){
        setcookie("token",'',time() + (86400 * 30),"/");
        header("Refresh:0;url=login.php");
    }
?>