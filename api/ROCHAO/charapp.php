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
Usage: getCharappItemUrl($Charapp->Hat1, false);*/
function getCharappItemUrl(int $ItemSlot, bool $IsComma): string {
    if (isWearingAnyItem($ItemSlot)) {
        $url = 'http://www.rochao.xyz/asset/?id='.$ItemSlot;
        if ($IsComma) {
            $url .= ';';
        }
        return  $url;
    }
    return '';
}

function getCharappUrl(int $UserID, bool $isFaceAllowed) : string {
    $Charapp = CharacterAppearance::find($UserID);

    if (!is_null($Charapp)) {
        $CharappUrl = 'http://www.rochao.xyz/asset/BodyColors.ashx/?id='.$UserID.';';
        $CharappUrl .= getCharappItemUrl($Charapp->Hat1, true);
        $CharappUrl .= getCharappItemUrl($Charapp->Hat2, true);
        $CharappUrl .= getCharappItemUrl($Charapp->Hat3, true);
        $CharappUrl .= getCharappItemUrl($Charapp->Head, true);
        if ($isFaceAllowed) {
            $CharappUrl .= getCharappItemUrl($Charapp->Face, true);
        }
        $CharappUrl .= getCharappItemUrl($Charapp->Pants, true);
        $CharappUrl .= getCharappItemUrl($Charapp->Shirts, true);
        $CharappUrl .= getCharappItemUrl($Charapp->TShirts, false);
        return $CharappUrl;
    }
    return "";
}

?>