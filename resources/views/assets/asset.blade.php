<?php
  $assetId = $_GET["id"];
  header("Content-Type: text/plain", true);
  if (isset($assetId)) {
    if (file_exists($_SERVER['DOCUMENT_ROOT']."/uploaded/".(int)$assetId)) {
      echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/uploaded/".(int)$assetId);
      }
      else {
        echo "404: File Not Found";
      }
  } else {
    header(header: "Location: http://www.rochao.xyz/asset/?id=0", replace: true, response_code: 302); 
    exit;
  }
?>