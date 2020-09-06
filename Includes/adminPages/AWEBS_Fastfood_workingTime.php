<?php

  echo '<h1>This is Working Time page title</h1>';

  use App\Classes\WorkingTimeController;
  use App\Classes\WorkingTimeView;

  $controller = new WorkingTimeController();
  $view = new WorkingTimeView();
