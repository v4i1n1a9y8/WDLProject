<?php

require "config.php";

$sql = "
SELECT * FROM mobiles;
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
    echo $_POST["id"];

?>