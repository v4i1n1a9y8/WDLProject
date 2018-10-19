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


<div class="block" style="width:960px;height:700px">

</div>

</div>
<?php echo file_get_contents("modules/footer.html");?>
</div>
</body>
</html>


