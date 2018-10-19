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
    $message = "<label>WrongL Username</label>";
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
    <form method="post"  class="abc" >
        <p ><?php echo $message; ?></p>
        <div class="text">
        <label class="label">Enter Username</label>
        <input type="text" name="username" required />
        </div>
        <div class="text">
        <label class="label">Enter Password</label>
        <input type="password" name="password" required />
        </div>
        <div >
        <input class="button" type="submit" name="login" value="Login" />
        </div>
        </form>
    </div>
    <?php echo file_get_contents("modules/footer.html");?>
    </div>
    </body>
</html>