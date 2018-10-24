<?php //LOGIN
  include("database/dbconnect.php");
  session_start();
  $id = intval($_GET['id']);
?>
<html>
    <head>
        <title>Home</title>
        <?php echo file_get_contents("modules/head.html");?>
        <script>
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
    xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("mobile").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","database/getBrowse.php?id="+<?php echo $id?>,true);
  xmlhttp.send();
</script>
    </head>
<body>
<div id="page">
<?php echo file_get_contents("modules/header.html");?>
<?php   include "modules/navigation.php";?>
<div id="mainbody">


<div id="mobile" class="block" style="margin-left:30px"></div>

</div>
<?php echo file_get_contents("modules/footer.html");?>
</div>
</body>
</html>


