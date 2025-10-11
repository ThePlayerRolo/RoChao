<?php

use App\Models\CharacterAppearance;
use ROCHAO\CharappUtil;
include(base_path('api\ROCHAOAPI_Include.php'));

header(header: 'Content-Type: text/plain');

if (isset($_GET['id'])) {
    $UserID = (int) $_GET['id'];

    echo ROCHAO\CharappUtil\getCharappUrl($UserID);
}
