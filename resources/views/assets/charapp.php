<?php

use App\Models\CharacterAppearance;

header(header: 'Content-Type: text/plain');

function checkIfWorn($Item): string {
    if ($Item != -1) {
        return 'http://www.rochao.xyz/asset/?id='.$Item.';';
    }

    return '';
}

if (isset($_GET['id'])) {
    $UserID = (int) $_GET['id'];

    $Charapp = CharacterAppearance::find($UserID);

    if (!is_null($Charapp)) {
        $CharappUrl = 'http://www.rochao.xyz/asset/BodyColors.ashx/?id='.$UserID.';';
        $CharappUrl .= checkIfWorn($Charapp->Hat1);
        $CharappUrl .= checkIfWorn($Charapp->Hat2);
        $CharappUrl .= checkIfWorn($Charapp->Hat3);
        $CharappUrl .= checkIfWorn($Charapp->Head);
        $CharappUrl .= checkIfWorn($Charapp->Face);
        $CharappUrl .= checkIfWorn($Charapp->Pants);
        $CharappUrl .= checkIfWorn($Charapp->Shirts);
        $CharappUrl .= checkIfWorn($Charapp->TShirts);
        echo $CharappUrl;
    }
}
