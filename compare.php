<?php 
include "modules/head1.php";
echo "Compare";
echo file_get_contents("modules/head2.html");
echo file_get_contents("modules/header.html");
include "modules/navigation.php";
echo '<div id="mainbody">';
?>

<div id="leftmob" style="float:left"></div>

<div id="rightmob" style="float:right"></div>




<?php
echo '</div>';
echo file_get_contents("modules/footer.html");
?>


<script>  //AJAX 
    $(document).ready(function(){

    leftmobile();

    function leftmobile()
    {
    $.ajax({
    type: 'POST',
    url:"database/getMobile.php",
    dataType: "json",
    data:({"id":1}),
    success:function(data){
        $('#leftmob').html(data);
    }
    })
    }
    
    });  
</script>