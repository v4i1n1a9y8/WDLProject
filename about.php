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


<div class="block" style="width:960;height:700">
<img src="images/aboutbg.png" style="float:right;width:400px">
<div style="width:500px">
<h3 style="color: #16ffbd;">Compare Mobile Phones</h3>
An extensive online tool to compare mobile phones in India offers you to compare a mobile phone with other phones side by side in order to measure each specifications of a phone against the same feature of the other ones. You can compare every technical aspect i.e. processor, display, storage etc., against similar specs of other smartphones.
</div> 
<br><br>

<img src="images/aboutbg2.png" style="width:400px">
<div style="width:500px;float:right">
<h3 style="color: #16ffbd;">Comparing Mobile Phones in India</h3>
Comparing phones in India has never been an easy task, especially with so many models launching on a daily basis. Moreover, every mobile is available with multiple online stores with different price tags. This mobile compare tool lets you compare prices in India along with allowing you to compare mobiles. 
</div>
</div>

</div>
<?php echo file_get_contents("modules/footer.html");?>
</div>
</body>
</html>


