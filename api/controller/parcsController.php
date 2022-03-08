<?php

  require_once("model/ParcsModel.php");

  function showParcs() {

    $parcsModel = new ParcsModel();
    $parcs = $parcsModel->getParcs();
    $response = $parcsModel->toJSON($parcs);

    require("view/view.php");
  }
