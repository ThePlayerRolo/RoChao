<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<?php
$assetId = $_GET["id"];
if (file_exists($_SERVER["DOCUMENT_ROOT"]."/asset/"."/uploaded/".(int)$assetId)) {
  echo "yay";
  }
  else{ echo "No";
  }
?>
<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

</body>
</html>