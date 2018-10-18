<?php //LOGIN
  include("database/dbconnect.php");
  session_start();

?>
<html>
    <head>
        <title>Home</title>
        <?php echo file_get_contents("modules/head.html");?>
        <script>
function showMobile(str,num) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
    xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("mobile"+num).innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","database/getMobile.php?id="+str,true);
  xmlhttp.send();
}
</script>

    </head>
<body>
<div id="page">
<?php echo file_get_contents("modules/header.html");?>
<?php   include "modules/navigation.php";?>
<div id="mainbody">

<div class=block>
<form>
<select name="select1" onchange="showMobile(this.value,1)">
<option value="">Select a person:</option>
<option value="1">Honor 7x</option>
<option value="2">Nexus 6p</option>
</select>
</form>

<div id="mobile1" class="block"></div>
</div>

<div class=block style="float:right">
<form>
<select name="select2" onchange="showMobile(this.value,2)">
<option value="">Select a person:</option>
<option value="1">Honor 7x</option>
<option value="2">Nexus 6p</option>
</select>
</form>

<div id="mobile2" class="block"></div>
</div>
</div>
<?php echo file_get_contents("modules/footer.html");?>
</div>
</body>
</html>

