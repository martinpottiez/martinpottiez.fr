<?php
if($last_msg->rowCount() != 0)
{
  $message = $last_msg->fetch(PDO::FETCH_ASSOC);
  $m = array('id' => $message['id'], 'msg' => $message['msg'], 'length' => $message['length']);
}
else
{
  $m = array('id' => 0, 'msg' => 'Aucun message', 'length' => 13);
}
echo json_encode($m);
