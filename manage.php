<?php //LOGIN
  include("database/dbconnect.php");
  session_start();

 if(isset($_POST["reset"])){
     resetdb();
     unset($_POST["reset"]);
 }
?>
<html>
    <head>
        <title>Home</title>
        <?php echo file_get_contents("modules/head.html");?>
    </head>
<body>
<div id="page">
<?php echo file_get_contents("modules/header.html");?>
<?php   include "modules/navigation.php";?>
<div id="mainbody">

    <div class="block" >
    <form method="post">
        <input style="color:black" type="submit" name="reset" value="Reset Database">
    </form>
    </div>

</div>
<?php echo file_get_contents("modules/footer.html");?>
</div>
</body>
</html>
