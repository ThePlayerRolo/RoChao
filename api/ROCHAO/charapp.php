<?php

namespace ROCHAO\CharappUtil;
use App\Models\CharacterAppearance;

function isWearingAnyItem($Item): bool {
    if ($Item != -1) {
        return true;
    }

    return false;
}

/*Returns the URL of a single Item in a charapp.
Usage: getCharappItemUrl($Charapp->Hat1);*/
function getCharappItemUrl(int $ItemSlot): string {
    if (isWearingAnyItem($ItemSlot)) {
        return 'http://www.rochao.xyz/asset/?id='.$ItemSlot.';';
    }
    return '';
}

function getCharappUrl(int $UserID) : string {
    $Charapp = CharacterAppearance::find($UserID);

    if (!is_null($Charapp)) {
        $CharappUrl = 'http://www.rochao.xyz/asset/BodyColors.ashx/?id='.$UserID.';';
        $CharappUrl .= getCharappItemUrl($Charapp->Hat1);
        $CharappUrl .= getCharappItemUrl($Charapp->Hat2);
        $CharappUrl .= getCharappItemUrl($Charapp->Hat3);
        $CharappUrl .= getCharappItemUrl($Charapp->Head);
        $CharappUrl .= getCharappItemUrl($Charapp->Face);
        $CharappUrl .= getCharappItemUrl($Charapp->Pants);
        $CharappUrl .= getCharappItemUrl($Charapp->Shirts);
        $CharappUrl .= getCharappItemUrl($Charapp->TShirts);
        return $CharappUrl;
    }
    return "";
}

?>