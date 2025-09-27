<?php

$assetId = $_GET["id"];
  if (isset($assetId)) {
    if (file_exists($_SERVER['DOCUMENT_ROOT']."/asset/uploaded/".(int)$assetId)) {
      header("Content-Type: text/plain");
      echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/asset/uploaded/".(int)$assetId);
      }
      else {
        header("Content-Type: text/plain");
        echo "404: File Not Found";
      }
  } else {
    header(header: "Location: http://www.rochao.xyz/asset/?id=0", replace: true, response_code: 302); 
    exit;


  }



?>
