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

<h3>Address :</h3>
Sector 8, plot 1,<br>
Ghansoli , Navi Mumbai<br>
<br><br>
    For advertising opportunities in magazine or website, mail to compare@mobiles.in<br>
    Say hello on 022-67899166 / 0120-4010599<br>
    Fax a message on 022-67499667 / 0120-4017911<br>
    


</div>

</div>
<?php echo file_get_contents("modules/footer.html");?>
</div>
</body>
</html>


