<?php //LOGIN
  include("database/dbconnect.php");
  session_start();

  $message = '';

  if(isset($_SESSION['user_id']))
  {
  header('location:index.php');
  }

  if(isset($_POST["login"]))
    {
    $query = "
    SELECT * FROM users WHERE username = ?
    ";
    $statement = $conn->prepare($query);
    $statement->execute([$_POST["username"]]);
    $count = $statement->rowCount();
    if($count > 0)
    {
      $result = $statement->fetchAll();
        foreach($result as $row)
        {
          if(password_verify($_POST["password"], $row["password"]))
          {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];

            if($row["type"]=="admin"){
                $_SESSION['admin']=1;
            }

            header("location:index.php");
          }
          else
          {
          $message = "<label>Wrong Password</label>";
          }
        }
    }
    else
    {
      $message = "<label>Wrong Username</label>";
    }
}

if(isset($_POST["register"]))
{
$query = "
SELECT * FROM users WHERE username = ?
";
$statement = $conn->prepare($query);
$statement->execute([$_POST["username"]]);
$count = $statement->rowCount();
if($count == 0)
{
  addUser($_POST["username"],$_POST["password"]);
  $stmt = $conn->prepare("SELECT user_id FROM users WHERE username=?");
  $stmt->execute([$_POST["username"]]);
  $_SESSION['user_id']= $stmt->fetch()[0];
  $_SESSION['username'] = $_POST['username'];
  header("location:index.php");
  $message=$_SESSION["user_id"];
}
else
{
  $message = "<label>Username exists</label>";
}
}
?>


<html>
    <head>
        <title>Login</title>
        <?php echo file_get_contents("modules/head.html");?>
    </head>
    <body>
    <div  id="page">
    <?php echo file_get_contents("modules/header.html");?>
    <?php   include "modules/navigation.php";?>
    <div  id="mainbody" class="login">
    <form method="post"  class="loginform" >
        <p ><?php echo $message; ?></p>
        <table >

        <tr class="text">
        <td style="text-align:center;"><label class="label">Enter Username</label></td>
        <td style="text-align:center;"><input type="text" name="username" required /></td>
        </tr>

        <tr class="text">
        <td style="text-align:center;"><label class="label">Enter Password</label></td>
        <td style="text-align:center;"><input type="password" name="password" required /></td>
        </tr>

        <tr>
        <td style="text-align:center;"><input class="button" type="submit" name="login" value="Login" /></td>
        <td style="text-align:center;"><input class="button" type="submit" name="register" value="Register" /></td>
        </tr>

        </table>
    </form>
    </div>
    <?php echo file_get_contents("modules/footer.html");?>
    </div>
    </body>
</html>