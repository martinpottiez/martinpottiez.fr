<?php

class ConfigModel {

  protected function connect(){
    //return new PDO('mysql:host=localhost;dbname=nosparcs;charset=utf8', 'root', 'root');

    return new PDO('mysql:host=martinuclassroom.mysql.db;dbname=martinuclassroom;charset=utf8', 'martinuclassroom', 'Aqwzsxpmol951');
  }

  public function toJSON($req){

    $response = array();
    while($ans = $req->fetch(PDO::FETCH_ASSOC)){
      if(is_string($ans)) {
        $response[] = utf8_encode($ans);
      } else {
        $response[] = $ans;
      }
    }
    return $response;
  }

}
