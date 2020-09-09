<div id="awebsIndex" class="wrapper">
  <h1>This is an index page of admin menu pages</h1>
  <p>This is an Fast food plugin. It manages the fast food articles and ingredients, manages online orders and manages users registered to the platform. In backend you will be able to administrate all of these components, a on frontend, users will be able to register, login, order fastfood to be delivered to regisered addresses.</p>

</div>

<?php
  $permalink = get_permalink();
  $page = $_GET['page'];
  $thisPage = $permalink . '?page=' . $page;
  echo $thisPage . '<br />';

  ?>
  <a href="<?php echo $thisPage; ?>&number=1">Klikni ovde</a><br />
  <?php

  if(isset($_GET['number'])):
    echo $_GET['number'];
  endif;
 ?>
