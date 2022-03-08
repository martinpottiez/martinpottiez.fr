<?php
  require_once("ConfigModel.php");

  class ParcsModel extends ConfigModel {

    public function getParcs() {

      $db = $this->connect();
      $req = $db->prepare('SELECT * FROM np_parcs');
      $req->execute();
      return $req;
    }
  }
