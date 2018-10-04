<hr>
<a class="blob"  style="margin:0 10 0 10" href="../index.php">Home</a> 
<a class="blob"  style="margin:0 10 0 10" href="../compare.php">Compare</a> 
<a class="blob"  style="margin:0 10 0 10" href="../browse.php">Browse</a> 

<?php
include_once "database/config.php";
if($loggedin){
echo "<a class='blob' style='margin:0 10 0 10;float:right' href='../logout.php'>Logout</a>";
}else{
echo "<a class='blob' style='margin:0 10 0 10;float:right' href='../login.php'>Login</a>";


}
if($admin){
echo "<a class='blob' style='margin:0 10 0 10;float:right' href='../manage.php'>Manage</a>";
}
?>
<a class="blob" style="margin:0 10 0 10;float:right" href="../contact.php">Contact</a> 
<a class="blob" style="margin:0 10 0 10;float:right" href="../about.php">About</a> 
<br><br><br>
<hr>