<?php
$id = intval($_GET['id']);
include("dbconnect.php");

$sql = "
SELECT * FROM mobiles where mobile_id=$id;
";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$output="
<table class='compare'>
";

foreach($result as $row){
    $output .= '
    <tr>
    <td colspan="8" rowspan="9"><img style="
    width:400px;
    height:500px;" src="'.$row['image'].'"></td>
    </tr>
    <tr>
    <th>Price:</th><td style="
        color:lime;
        text-decoration: underline;
    ">'.$row['price'].' ₹</td>
    </tr>
    <tr>
    <th>Name:</th><td>'.$row['name'].'</td>
    </tr>
    <tr>
    <th>Company:</th><td>'.$row['company'].'</td>
    </tr>
    <tr>
    <th>Processor:</th><td>'.$row['processor'].'</td>
    </tr>
    <tr>
    <th>Ram:</th><td>'.$row['ram'].'</td>
    </tr>
    <tr>
    <th>Storage:</th><td>'.$row['storage'].'</td>
    </tr>
    <tr>
    <th>Camera:</th><td>'.$row['camera'].'</td>
    </tr>
    <tr>
    <th>Battery:</th><td>'.$row['batterysize'].'</td>
    </tr>
    <tr>
    <td>
    <a class="fav" href="database/favmobile.php?id='.$id.'">Add to favourites</a>
    </td>
    </tr>
    ';
}
    $output .="</table>";

    echo $output;

?>