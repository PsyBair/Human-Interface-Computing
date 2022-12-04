<!DOCTYPE html>
<html>




<?php
include("includes/header.php");
?>


<body class="w3-content" style="max-width:1200px">



<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>GearBox</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="index.php" class="w3-bar-item w3-button" id="myBtn">Home</a>
    <a href="Products.php" class="w3-bar-item w3-button">Products</a>
    <a href="AboutUs.php" class="w3-bar-item w3-button">About Us</a>
    <a href="ContactUs.php" class="w3-bar-item w3-button">Contact Us</a>
    </div>
</nav>



<!-- Small Screen Formatting -->
<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">GearBox</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">
<!-- Push down content on small screens -->
<div class="w3-hide-large" style="margin-top:83px"></div>
<!-- End Small Screen Formatting -->



  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-right">
      <a href="SignIn.php" class="w3-bar-item w3-button">Sign In/Sign Up</a>
      <a href="Cart.php" class="fa fa-shopping-cart w3-margin-right"></a>
    </p>
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container w3-center w3-border">
    <img src="Assets/3chests.jpg" alt="Image of 3 GearBoxes" style="width:20%">
    <p><b>We are GearBox, and we are the premium source of gear and gifts for nature lovers everywhere, 
      delivered monthly directly to your door. Click below to receive one of our three tiers of GearBoxes! </p></b>
  </div>

  <!-- Product grid -->
  <div class="w3-display-container w3-container w3-center w3-border w3-black w3-text-white w3-xlarge w3-padding-16">
    <a href="Products.php" class="w3-bar-item w3-button"><b>Silver GearBox</b></a>
    <a href="Products.php" class="w3-bar-item w3-button"><b>Gold GearBox</b></a>
    <a href="Products.php" class="w3-bar-item w3-button"><b>Diamond GearBox</b></a>
    <div class="w3-large">
      <p>Silver is our most affordable GearBox</p>               
      <p>With Gold, you'll receive even more items</p>               
      <p>Diamond, our most popular GearBox, includes a major item in every box!</p>
  </div>
  </div>

  
<?php

include("includes/footer.php");
?>
  <!-- End page content -->


<script>
// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
} 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

</script>
<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>