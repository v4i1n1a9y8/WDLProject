<?php //LOGIN
  include("database/dbconnect.php");
  session_start();

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


nothing

</div>
<?php echo file_get_contents("modules/footer.html");?>
</div>
</body>
</html>


