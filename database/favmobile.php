<?php
$id = intval($_GET['id']);
include("dbconnect.php");
session_start();

addfav(intval($_SESSION["user_id"]),$id);
echo $_SESSION["user_id"];

?>

<script>
javascript:history.go(-1);
</script>