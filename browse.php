<?php 
echo file_get_contents("modules/head1.html"); 
echo "Browse";
echo file_get_contents("modules/head2.html");
echo file_get_contents("modules/header.html");
echo file_get_contents("modules/navigation.html");
echo '<div id="mainbody">';
?>
<?php    
    try {
        require "database/config.php";
        usedb();
        $sql = "SELECT name,company,processor,ram from mobiles";
        $statement = $conn->query($sql);
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }

?>
 <table class="blob">
    <thead>
        <tr>
            <th>Mobile Name</th>
            <th>Company</th>
            <th>Processor</th>
            <th>RAM</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $rowCount = $statement->rowCount()?>
        <?php for ($x = 0; $x < $rowCount; $x++) { 
        $result =  $statement->fetchObject();
        ?>
            <tr>
                <td><?php echo $result->name; ?></td>
                <td><?php echo $result->company; ?></td>
                <td><?php echo $result->processor; ?></td>
                <td><?php echo $result->ram; ?></td>
            </tr>
        <?php } ?> 
    <tbody>

</table> 
<?php
echo '</div>';
echo file_get_contents("modules/footer.html");
?>