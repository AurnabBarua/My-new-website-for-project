<?php include 'header_general.php'; ?>
<br><br><br>
<h1 class="text-center mt-5">My Profile</h1>
<div class="container">
  <div class="row">
    <div class="col col-md-6 pb-2">
      <img src="images/account_pic/<?php echo $picture; ?>">
    </div>
    <div class="col col-md-6">
      <div class="row pb-4 pt-5">
        <div class="col col-md-6">
          Name
        </div>
        <div class="col col-md-6">
          <?php echo $full_name; ?>
        </div>

      </div>
      <div class="row pb-4">
        <div class="col col-md-6">
          Email
        </div>
        <div class="col col-md-6">
          <?php echo $email; ?>
        </div>

      </div>
      <div class="row pb-4">
        <div class="col col-md-6">
          Contact
        </div>
        <div class="col col-md-6">
          <?php echo $contact; ?>
        </div>

      </div>
      <div class="row pb-4">
        <div class="col col-md-6">
          Address
        </div>
        <div class="col col-md-6">
          <?php echo $address; ?>
        </div>

      </div>

    </div>

  </div>

</div>
<?php include 'footer.php'; ?>
