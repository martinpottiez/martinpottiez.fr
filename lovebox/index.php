<?php
  session_start();
  require('controller/boardController.php');
  if(isset($_GET['action']))
  {
    $action = $_GET['action'];
    switch($action)
    {
      case "newMessage":
        newMessage();
      break;
      default:
      showBoard();
    }
  }
  else
  {
    showBoard();
  }
