<?php
  session_start();
  require('controller/boxController.php');
  if(isset($_GET['action']))
  {
    $action = $_GET['action'];
  }
  else
  {
    showBox();
  }
