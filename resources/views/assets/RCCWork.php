<?php

include(base_path('ROCHAO-RCCServiceSoap\Assemblies\Roblox\Grid\RCC_Include.php'));
include(base_path('api\ROCHAOAPI_Include.php'));
use Illuminate\Support\Facades\Storage;

use Roblox\Grid\Rcc as RCC;

$RCCServiceSoap = new RCC\RCCServiceSoap("127.0.0.1", 64989);

$job = new RCC\Job("StringTest4");


//Hat

$scriptData = file_get_contents(storage_path('RenderingScripts\HatThumbnail.lua'));
$scriptData  = str_replace("%asset%", 1, $scriptData);



//Player
/*
$scriptData = file_get_contents(storage_path('RenderingScripts\PlayerThumbnail.lua'));
$charapp = ROCHAO\CharappUtil\getCharappUrl(1, false);

$scriptData  = str_replace("%charapp%", "http://www.rochao.xyz/asset/BodyColors.ashx/?id=1;http://www.rochao.xyz/asset/?id=8;http://www.rochao.xyz/asset/?id=25", $scriptData);*/

//Shirts and Pants
/*
 $scriptData = file_get_contents(storage_path('RenderingScripts\ShirtsPantsThumbnail.lua'));
$scriptData  = str_replace("%asset%", 29, $scriptData);*/

/*
$scriptData = file_get_contents(storage_path('RenderingScripts\GearThumbnail.lua'));
$scriptData  = str_replace("%asset%", 19, $scriptData);*/

//echo $scriptData;
/*
$scriptData = file_get_contents(storage_path('RenderingScripts\HeadThumbnail.lua'));

$scriptData  = str_replace("%headUrl%", 33, $scriptData);*/


$script = new RCC\ScriptExecution("StringTest4-Script", $scriptData);
$text =  $RCCServiceSoap->OpenJob($job, $script);
$RCCServiceSoap->CloseJob("StringTest4");
if ($text != null) {
    $image_encoded =  $text[0];
    $image = base64_decode($image_encoded);
    //echo $image_encoded;
    Storage::put('test.png', $image);

}



?>

<img src = <?php echo Storage::url('test.png')?> >