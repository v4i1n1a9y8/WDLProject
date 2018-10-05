<br>
<a class="blob nav" href="../index.php">Home</a> 
<a class="blob nav" href="../compare.php">Compare</a> 
<a class="blob nav"  href="../browse.php">Browse</a> 

<?php
include_once "database/config.php";
if($loggedin){
echo "<a class='blob nav' style='float:right;background-color:red;' href='../logout.php'>Logout</a>";
}else{
echo "<a class='blob nav' style='float:right' href='../login.php'>Login</a>";


}
if($admin){
echo "<a class='blob nav' style='float:right' href='../manage.php'>Manage</a>";
}
?>

<a class="blob nav" style="float:right" href="../contact.php">Contact</a> 
<a class="blob nav" style="float:right" href="../about.php">About</a> 
<br><br><br>
