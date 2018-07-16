<div class="sub-banner">
</div>
<section class="checkout" style="color:white">
  <div class="container">
    <h1 class="news-heading wow bounceIn">Checkout</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="login">
  <h2 class="active"> Purchase Information </h2>
  <h2 style="margin-left: 3em;" class="nonactive"><?php echo $this->session->userdata('order'); ?> VND </h2>
  <?php echo validation_errors(); ?>

<?php echo form_open('order/insert/"'); ?>

    <input type="text" class="text" name="user_name" required="">
    <span>Name</span>
    <br>
  <input type="text" class="text" name="user_address" required="">
    <span >Address</span>
    <br>
    <input type="text" class="text" name="user_email" required="">
    <span>Email</span>
    <br>
    <input type="text" class="text" name="user_phone" required="">
    <span>Phone </span>
    <br>
    <label for="checkbox-1-1">Check Your Phone To Verify Purchase</label>
    <button class="signin" type="submit" value="Verify">
      Verify
    </button>
    <hr>
  </form>

</div>
      </div>
    </div>
  </div>

</section>
</body>
</html>