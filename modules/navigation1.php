<div style="height:60px;background-color:#666">
    <a class="nblob" style="float:left" href="../index.php">Home</a> 
    <a class="nblob" style="float:left" href="../compare.php">Compare</a> 
    <a class="nblob" style="float:left" href="../browse.php">Browse</a> 
    
    <?php
    include_once "database/config.php";
    if($loggedin){
    echo "<a class='nblob' style='float:right' href='../logout.php'>Logout</a>";
    }else{
    echo "<a class='nblob' style='float:right' href='../login.php'>Login</a>";


    }
    if($admin){
    echo "<a class='nblob' style='float:right' href='../manage.php'>Manage</a>";
    }
    ?>
    <a class="nblob" style="float:right" href="../contact.php">Contact</a> 
    <a class="nblob" style="float:right" href="../about.php">About</a> 

</div>