<?php

session_start();

include("includes/header.php");
?>


  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">Register</span> AT AVE
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>


<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->





<div class="col-md-12" ><!-- col-md-12 Starts -->

<div class="box" ><!-- box Starts -->

<div class="box-header" ><!-- box-header Starts -->

<center><!-- center Starts -->

<h2> Register A New Account </h2>



</center><!-- center Ends -->

</div><!-- box-header Ends -->

<form action="customer_register.php" method="post" enctype="multipart/form-data" ><!-- form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label>Customer Name</label>

<input type="text" class="form-control" name="c_name" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label> Customer Email</label>

<input type="text" class="form-control" name="c_email" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label> Customer Password </label>

<div class="input-group"><!-- input-group Starts -->

<span class="input-group-addon"><!-- input-group-addon Starts -->

<i class="fa fa-check tick1"> </i>

<i class="fa fa-times cross1"> </i>

</span><!-- input-group-addon Ends -->

<input type="password" class="form-control" id="pass" name="c_pass" required>

<span class="input-group-addon"><!-- input-group-addon Starts -->

<div id="meter_wrapper"><!-- meter_wrapper Starts -->

<span id="pass_type"> </span>

<div id="meter"> </div>

</div><!-- meter_wrapper Ends -->

</span><!-- input-group-addon Ends -->

</div><!-- input-group Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label> Confirm Password </label>

<div class="input-group"><!-- input-group Starts -->

<span class="input-group-addon"><!-- input-group-addon Starts -->

<i class="fa fa-check tick2"> </i>

<i class="fa fa-times cross2"> </i>

</span><!-- input-group-addon Ends -->

<input type="password" class="form-control confirm" id="con_pass" required>

</div><!-- input-group Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label> Customer Country </label>

<input type="text" class="form-control" name="c_country" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label> Customer City </label>

<input type="text" class="form-control" name="c_city" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label> Customer Contact </label>

<input type="text" class="form-control" name="c_contact" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label> Customer Address </label>

<input type="text" class="form-control" name="c_address" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label> Customer Image </label>

<input type="file" class="form-control" name="c_image" required>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<center>

<!-- <label> Captcha Verification </label> -->

<!-- <div class="g-recaptcha" data-sitekey="6LcHnoQaAAAAAF_WTAEPkd_XO_9XC80G6N1MjrH2"></div> -->

</center>

</div><!-- form-group Ends -->


<div class="text-center"><!-- text-center Starts -->

<button type="submit" name="register" class="btn btn-primary">

<i class="fa fa-user-md"></i> Register

</button>

</div><!-- text-center Ends -->

</form><!-- form Ends -->

</div><!-- box Ends -->

</div><!-- col-md-12 Ends -->



</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

