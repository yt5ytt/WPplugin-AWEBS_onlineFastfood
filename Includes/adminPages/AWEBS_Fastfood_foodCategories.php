<?php

  use App\Classes\FoodCategoriesController;

  $controller = new FoodCategoriesController();

  // $awebs_add_meta_nonce = wp_create_nonce( 'awebs_add_user_meta_form_nonce' );
?>

<div id="foodCategories" class="wrapper">

  <div class="title">
    <h1>Food categories</h1>
  </div>

  <div class="formPost">
    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">

      <input type="hidden" name="action" value="awebs_working_time" />
      <!-- <input type="hidden" name="awebs_add_user_meta_nonce" value="<?php //echo $awebs_add_meta_nonce ?>" /> -->

      <h2>ADD FOOD CATEGORIES</h2>

      <!-- <div class="row1"><label for="foodCategories">New food category</label></div> -->
      <div class="row2"><input type="text" name="foodCategory" value="" placeholder="New food category"/></div>
      <div class="row3"><button type="button" name="submit">Submit Category</button></div>



    </form>
  </div>

  <div class="list">

    <h2>LIST OF EXISTING FOOD CATEGORIES</h2>

  </div>



</div>
