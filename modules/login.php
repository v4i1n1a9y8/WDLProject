
<?php
require_once "database/config.php";
if(!$loggedin) {
    echo "<div class='blob' style='z-index: 1;float:none'>
    <h3>LOGIN</h3>
    <hr>
    <form method='post'>
    Name:       <input style='color:black' type='text' name='username'      ><br><hr>
    Password:   <input style='color:black' type='password' name='password'   ><br><hr>
    <input style='color:black' type='submit' name='login' value='login'>
    <input style='color:black' type='submit' name='signup' value='signup'>
    </form>";
    if(isset($_POST["login"])){
        usedb();
        $admin=false;
        $loggedin=false;
        try {
            $sql = sprintf("select password,type from users where username='%s'"
                    ,$_POST["username"]);
            $statement = $conn->query($sql);
            $var = $statement->fetch();
            if($var>0 && $var[0]==$_POST["password"])
            {
                $loggedin=true;
                $token = md5(uniqid(rand(), true));
                setcookie("token",$token,time() + (86400 * 30),"/");
                $sql = sprintf("update users set token='%s' where 
                        username='%s' and password='%s'",
                        $token,
                        $_POST["username"]
                        ,$_POST["password"]);
                $conn->exec($sql);
            }
            if($var>0 && $var[1]=="admin")
            {
                $admin=true;
                echo "lol";
            }
            #echo "<script type='text/javascript'>alert('done');</script>";
            header("Refresh:0");
        }
        catch (PDOException $e) {
            $loggedin=true;
            echo $sql." ".$e->getMessage();
            #echo "<script type='text/javascript'>alert('notdone');</script>";
        }
    }

    /*if(isset($_POST["signup"])){
        try {
            usedb();
            $sql = sprintf("select * from users where username='%s'"
                ,$_POST["username"]);
            $statement = $conn->query($sql);
            $var = $statement->fetch();
            echo $var[1];
            if($var[1]!=$_POST["username"]){
                $sql = printf("insert into users (username,password) values('%s','%s')"
                        ,$_POST["username"]
                        ,$_POST["password"]);
                $conn->exec($sql);
            }
        }
        catch (PDOException $e) {
            echo $sql." ".$e->getMessage();
            #echo "<script type='text/javascript'>alert('notdone');</script>";
        }
    }*/
}
?>

<?php 
if($loggedin){
    header("Refresh:0;url=index.php");
    echo "<form method='post'>
        <input type='submit' name='logout' value='Logout'>
    </form>";
    if(isset($_POST["logout"])){
        if(isset($_COOKIE["token"])){
            setcookie("token",'',time() + (86400 * 30),"/");
            header("Refresh:0;url=index.php");
        }
    }
}
?>
</div>