<?php //LOGIN
  include("database/dbconnect.php");
  session_start();

  $mobiles = "";
  


  $query = "
  SELECT * FROM mobiles
  ";
  $statement = $conn->prepare($query);
  $statement->execute();
  $count = $statement->rowCount();
    if($count > 0)
    {
        $result = $statement->fetchAll();
        foreach($result as $row)
        {
            $mobiles .="
            <a id=".$row["mobile_id"]." class='block mobile' href='mobile.php?id=".$row["mobile_id"]."'>
            <img src=".$row["image"]." style='
            width:100px;
            height:90px;'>"
            ."<br>".$row["name"].
            "</a>";
        }
    }
    else
    {
    $message = "<label>WrongL Username</label>";
    }

?>
<html>
    <head>
        <title>Browse</title>
        <?php echo file_get_contents("modules/head.html");?>
    </head>
<body>
<div id="page">
<?php echo file_get_contents("modules/header.html");?>
<?php   include "modules/navigation.php";?>
<div id="mainbody">

    <div class="block" style="padding-left:80px;">
   

    
    <?php echo $mobiles ?>
    <div id="last_mobile_loader"></div>

    </div>

</div>
<?php echo file_get_contents("modules/footer.html");?>
</div>
</body>
</html>


<script type="text/javascript">/*
var processing;

$(document).ready(function(){

    $(window).scroll(function(){
 
 var position = $(window).scrollTop() ;
 var bottom = $(document).height() - $(window).height();

 if( position == bottom ){
    $('#last_mobile_loader').append("<a class='block mobile' href='browse.php'></a>");
 }

});
});*/
</script>