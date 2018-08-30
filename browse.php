<?php 
echo file_get_contents("modules/head1.html"); 
echo "Browse";
echo file_get_contents("modules/head2.html");
echo file_get_contents("modules/header.html");
echo file_get_contents("modules/navigation.html");
echo '<div id="mainbody">';
?>
 <table style="width:90%;margin:30px;border: 1px solid black;padding:50px;background-color:white">
    <tr>
        <th>Mobile Name</th>
        <th>Processor</th>
        <th>RAM</th>
    </tr>
    <?php for ($x = 0; $x <= 10; $x++) { ?>
        <tr>
            <td>Honor 7x</td>
            <td>Kirin 659</td>
            <td>4gb</td>
        </tr>
    <?php }?> 

</table> 
<?php
echo '</div>';
echo file_get_contents("modules/footer.html");
?>