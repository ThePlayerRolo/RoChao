<?php 
    header("Content-Type: text/plain");
    $UserId = (int)$_GET["id"];
    /* Hat1, Hat2, Hat3, Head, Face, Package, Pants, Shirts, TSHirt, Gear  */
    /* Head: "6340101" Package: "311", Pants: "1812626", Shirts: "3056808", */
    $CharacterAppearanceTable = [ "27345567","1163672","8808550143",  "7074764",   "7952959437", "10472779" ];
    function EchoIfWorn ($Item) {
      if ($Item != "") {
        echo "http://www.rochao.com/asset/?id=".$Item.";";
      }
    }
    
    if ($UserId == 0) {  
      echo "http://www.rochao.com/asset/BodyColors.ashx/?id=".$UserId.";";
      for ($i = 0; $i < 10; $i++) {
        EchoIfWorn($CharacterAppearanceTable[$i]);
      }
      }
?>


