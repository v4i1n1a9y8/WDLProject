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
<table>
";

foreach($result as $row){
    $output .= '
    <tr>
    <td colspan="2"><img style="
    width:200px;
    height:200px;" src="'.$row['image'].'"></td>
    </tr>
    <tr>
    <td>Name:</td><td>'.$row['name'].'</td>
    </tr>
    <tr>
    <td>Company:</td><td>'.$row['company'].'</td>
    </tr>
    <tr>
    <td>Processor:</td><td>'.$row['processor'].'</td>
    </tr>
    <tr>
    <td>Ram:</td><td>'.$row['ram'].'</td>
    </tr>
    ';
}
    $output .="</table>";

    echo $output;

?>