<?php

  use App\Classes\WorkingTimeController;
  use App\Classes\WorkingTimeView;

  $controller = new WorkingTimeController();
  $view = new WorkingTimeView();

  $openTime = $view->openHour . ':' . $view->openMinute;
  $closeTime = $view->closeHour . ':' . $view->closeMinute;

  $awebs_add_meta_nonce = wp_create_nonce( 'awebs_add_user_meta_form_nonce' );
?>

<div id="workingTime" class="wrapper">
  <h1>WORKING TIME</h1>
  <p>Here you can set working time of your restaurant</p>
  <p>Current working time is set to <b><?php echo $openTime . ' - ' . $closeTime; ?></b></p>

  <h2>SET NEW WORKING TIME</h2>

  <div class="form">

    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">

      <input type="hidden" name="action" value="awebs_working_time" />
      <input type="hidden" name="awebs_add_user_meta_nonce" value="<?php echo $awebs_add_meta_nonce ?>" />

      <div class="row">
        <div class="label">
          <label>Opening Time: </label>
        </div>
        <div class="select">
          <select name="openHour">
  <?php
              for ($i=0; $i < 24; $i++) {
                if($i<10): $i= '0' . $i; endif;
  ?>
            <option value="<?php echo $i; ?>" <?php if($i == $view->openHour): echo 'selected'; endif; ?>><?php echo $i; ?></option>
  <?php
              }
  ?>
          </select>
          :
          <select name="openMinute">
  <?php
              for ($i=0; $i < 60; $i++) {
                if($i<10): $i= '0' . $i; endif;
  ?>
            <option value="<?php echo $i; ?>" <?php if($i == $view->openMinute): echo 'selected'; endif; ?>><?php echo $i; ?></option>
  <?php
              }
  ?>
          </select>
        </div>


      </div><!-- end div .row -->

      <div class="row">
        <div class="label">
          <label>Closing Time: </label>
        </div>
        <div class="select">
          <select name="closeHour">
  <?php
              for ($i=0; $i < 24; $i++) {
                if($i<10): $i= '0' . $i; endif;
  ?>
            <option value="<?php echo $i; ?>" <?php if($i == $view->closeHour): echo 'selected'; endif; ?>><?php echo $i; ?></option>
  <?php
              }
  ?>
          </select>
          :
          <select name="closeMinute">
  <?php
            for ($i=0; $i < 60; $i++) {
              if($i<10): $i= '0' . $i; endif;
  ?>
            <option value="<?php echo $i; ?>" <?php if($i == $view->closeMinute): echo 'selected'; endif; ?>><?php echo $i; ?></option>
  <?php
            }
  ?>
          </select>
        </div>


      </div><!-- end div .row -->

      <div class="row">
        <!-- <input type="submit" name="submitTime" value="Submit Time" /> -->
        <button type="submit" name="submitWT">Submit Time</button>
      </div>
    </form>

  </div>
</div>
