<?php
class Master
{
  protected function connect()
  {
    return new PDO('mysql:host=localhost;dbname=lovebox;charset=utf8', 'root', 'root');
  }
}
