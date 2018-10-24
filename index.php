<?php //LOGIN
  include("database/dbconnect.php");
  session_start();

?>
<html>
    <head>
        <title>Home</title>
        <?php echo file_get_contents("modules/head.html");?>
<style>
.mobile-img{
    width:70%;
    height:30%;
}
a.article-link:visited,a.article-link:link{
    color:#05ac4a;
}
    </style>
</head>
<body>
<div id="page">
<?php echo file_get_contents("modules/header.html");?>
<?php   include "modules/navigation.php";?>
<div id="mainbody">
<div class="block"  style="overflow:hidden;width:30%;height:340px;float:right;">
    <h3>Updates</h3>
    <hr>
    <marquee direction = "up">
    <div class="updates">The Night Sight mode in the Google Camera app for the Google Pixel 3, Pixel 2, and Pixel</div>
    <div class="updates">OnePlus 6T Pop-Up Events to Be Held in 9 Indian Cities on November 2; Low-Light Photography Capabilities Teased</div>
    <div class="updates">Asus ZenFone Lite L1, ZenFone Max M1 to Go on Sale During Flipkart Festive Dhamaka Days Sale</div>
    <div class="updates">
Honor 8X Now on Sale in India via Amazon, Price Starts at Rs. 14,999 </div>
    <div class="updates">
Xiaomi Black Shark Helo Gaming Phone With Up to 10GB RAM Launched: Price, Specifications </div>
    <div class="updates">
Pixel 3 XL Users Report 'Buzzing' Sound, Google to Fix Photo Saving Bug </div>
   
    
    </marquee>
</div>


<div style="float:left;">
    <div class="block" style="width:650px;height:700px;
    overflow: auto;">





<h1>Latest</h1><hr>
<a href="https://www.digit.in/mobile-phones/honor-8x-with-65-inch-full-hd-display-kirin-710-soc-goes-on-sale-today-price-launch-offers-and-all-y-44275.html">
<img class="mobile-img" alt="Honor 8X with 6.5-inch full-HD+ display, Kirin 710 SoC goes on sa..." title="Honor 8X with 6.5-inch full-HD+ display, Kirin 710 SoC goes on sa..." src="https://static.digit.in/default/61dfa1943d77e67feb0c909d2ec41dea09aa2fb5.jpeg">
</a>
<h2><a class="article-link" href="https://www.digit.in/mobile-phones/honor-8x-with-65-inch-full-hd-display-kirin-710-soc-goes-on-sale-today-price-launch-offers-and-all-y-44275.html">Honor 8X with 6.5-inch full-HD+ display, Kirin 710 SoC goes on...</a></h2>
<p>The Honor 8X comes with a dual rear camera setup and features a notched full HD+ display.</p>
<a href="https://www.digit.in/mobile-phones/honor-8x-with-65-inch-full-hd-display-kirin-710-soc-goes-on-sale-today-price-launch-offers-and-all-y-44275.html#disqus_thread">
<br><br>

<a href="https://www.digit.in/internet/amazon-great-indian-festival-sale-day-1-top-five-deals-on-smartphones-from-apple-xiaomi-and-others-44271.html">
<img  class="mobile-img" alt="Amazon Great Indian Festival Sale Day 1: Top five deals on smartp..." title="Amazon Great Indian Festival Sale Day 1: Top five deals on smartp..." src="https://static.digit.in/default/7fcdcc16298332b50489e7ccbd348f7382a3ef15.jpeg" data-src="https://static.digit.in/default/thumb_118992_default_td_600.jpeg"><span class="shadow"></span></a><h2>
<a  class="article-link"href="https://www.digit.in/internet/amazon-great-indian-festival-sale-day-1-top-five-deals-on-smartphones-from-apple-xiaomi-and-others-44271.html">Amazon Great Indian Festival Sale Day 1: Top five deals on...</a></h2>
<p>The Apple iPhone X, Honor 8X, Xiaomi Redmi Y2, Mi A2 and the Samsung Galaxy A8+ are our top...</p>
<a href="https://www.digit.in/internet/amazon-great-indian-festival-sale-day-1-top-five-deals-on-smartphones-from-apple-xiaomi-and-others-44271.html#disqus_thread"></a>













    
    </div>
</div>

<br><br><br>

<div class="block"  style="margin-top:50px;overflow:hidden;width:30%;height:300px;float:right;padding-top:0px;padding-bottom:0px">
    <h3>Offers</h3>
    <hr>
    <marquee direction = "up">
    <div class="updates"> Realme 2, Realme 2 Pro and Realme C1 starting at Rs 8,990, Rs 13,990 and Rs 6,999, respectively.</div>
    <div class="updates">Xiaomi Redmi Note 5 Pro will be available from Rs 12,999, and the Redmi 6 3GB RAM/32GB internal storage variant will be available for Rs 7,999 on Flipkart.</div>
    <div class="updates">Flipkart will be offering the Asus Zenfone 5Z at a discounted price of Rs 24,999 for the base variant and the Zenfone Max M1 Pro base variant at Rs 9,999.</div>
    <div class="updates">Oppo F9 Pro with 6GB RAM/64GB internal storage variant will be priced at Rs 23,990, with an extra Rs 3,000 off on exchange.</div>
    <div class="updates">Vivo V11 Pro 6GB RAM/64GB internal storage will be available for Rs 25,990 and Vivo V9 Youth at Rs 13,990 with Rs 2,000 additional discount on exchange.</div>
    
    </marquee>
</div>


</div>
<?php echo file_get_contents("modules/footer.html");?>
</div>
</body>
</html>


