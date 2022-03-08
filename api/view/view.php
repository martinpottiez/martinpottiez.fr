<?php
  header('Content-Type: application/json; charset=utf-8');
  if(isset($response)) {
    echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
  }
