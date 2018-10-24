<?php //LOGIN
  include("database/dbconnect.php");
  session_start();

  $mobiles = "";
  

$uid = $_SESSION["user_id"];
  $query = "
  SELECT * FROM favourites
  WHERE user_id=$uid
  ";
  $statement = $conn->prepare($query);
  $statement->execute();
  $count = $statement->rowCount();
    if($count > 0)
    {
        $result = $statement->fetchAll();
        foreach($result as $row)
        {
            $stmt = $conn->prepare("SELECT image,name from mobiles where mobile_id=?");
            $stmt->execute([$row["mobile_id"]]);
            $image = $stmt->fetch();
            $mobiles .="
            <a id=".$row["mobile_id"]." class='block ' style='float:left;width:70%' href='mobile.php?id=".$row["mobile_id"]."'>
            <img src=".$image[0]." style='
            width:100px;
            height:90px;'>"
            ."<br>".$image[1].
            "</a>
            <a id=".$row["mobile_id"]." class='block del'  href='database/deletefav.php?id=".$row["mobile_id"]."'>
            delete
            </a>
            ";
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
   <h3> Favourites</h3>

    
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
