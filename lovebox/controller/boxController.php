<?php
require_once('model/msgModel.php');

  function showBox()
  {
    $msg = new msg();
    $last_msg = $msg->getLastMsg();
    require('view/box.php');
  }
