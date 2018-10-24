<br>
<a class="block nav" href="../index.php">Home</a> 
<a class="block nav" href="../compare.php">Compare</a> 
<a class="block nav"  href="../browse.php">Browse</a> 

<?php 

if(!isset($_SESSION['user_id']))
{
    echo "<a class='block nav' style='float:right' href='../login.php'>Login</a>";
}
else 
{
    $var = $_SESSION["username"];
    echo "<a class='block nav' style='float:right;background-color:red' href='../logout.php'>$var Logout</a>";
}
?>

<a class="block nav" style="float:right" href="../manage.php">Manage</a> 
<a class="block nav" style="float:right" href="../contact.php">Contact</a> 
<a class="block nav" style="float:right" href="../about.php">About</a> 
<br><br>
<hr>