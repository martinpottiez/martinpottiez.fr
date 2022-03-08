<?php
require_once('Master.php');
class msg extends Master
{
  public function getLastMsg()
  {
    $db = $this->connect();
    $req = $db->prepare("SELECT * FROM lb_msg ORDER by date DESC LIMIT 1");
    $req->execute();
    return $req;
  }

  public function addMessage($message)
  {
    $db = $this->connect();
    $length = strlen($message);
    $add = $db->prepare("INSERT INTO lb_msg (msg,length) VALUES (:msg, :length)");
    $add->execute(array(
      'msg' => $message,
      'length' => $length,
    ));
  }
}
