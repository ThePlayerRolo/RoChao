<?php
header("Content-Type: text/plain", true);
if (isset($_GET["id"])) {
  $file = storage_path("uploaded/" . (int)$_GET["id"]);
  if (file_exists($file)) {
    echo file_get_contents($file);
  } else {
    echo "404: File Not Found";
  }
} else {
  echo "404: File Not Found";
  exit;
}
