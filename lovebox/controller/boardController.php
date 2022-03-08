<?php
require_once('model/msgModel.php');

  function showBoard()
  {
    $msg = new msg();
    $last_msg = $msg->getLastMsg();
    require('view/index.php');
  }

  function newMessage()
  {
    if(isset($_POST['send']))
    {
      if(isset($_POST['message']) AND !empty($_POST['message']))
      {
        $message = $_POST['message'];
        $msg = new msg();
        $msg->addMessage($message);
      }
    }
    header('Location:index.php');
  }
