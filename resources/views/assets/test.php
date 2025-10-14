<?php

include(base_path('ROCHAO-RCCServiceSoap\Assemblies\Roblox\Grid\RCC_Include.php'));
use Illuminate\Support\Facades\Storage;

use Roblox\Grid\Rcc as RCC;

$RCCServiceSoap = new RCC\RCCServiceSoap("127.0.0.1", 64989);

$job = new RCC\Job("StringTest4");
$scriptData = file_get_contents(storage_path('RenderingScripts\HatThumbnail.lua'));
$scriptData  = str_replace("%asset%", 1, $scriptData);
echo $scriptData;
$script = new RCC\ScriptExecution("StringTest4-Script", $scriptData);
$text =  $RCCServiceSoap->OpenJob($job, $script);


$RCCServiceSoap->CloseJob("StringTest4");
if ($text != null) {
    $image_encoded =  $text[0];
    $image = base64_decode($image_encoded);

    Storage::put('test.png', $image);
}

?>