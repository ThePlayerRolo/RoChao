<?php

$assetId = $_GET["id"];
  if (file_exists($_SERVER['DOCUMENT_ROOT']."/asset/uploaded/".(int)$assetId)) {
    header("Content-Type: text/plain");
    echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/asset/uploaded/".(int)$assetId);
    }
    else {
      header("Content-Type: text/plain");
      echo "404: File Not Found";
    }
?>
