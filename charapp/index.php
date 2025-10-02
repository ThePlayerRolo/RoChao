<?php 
    header(header: "Content-Type: text/plain");
    $UserId = (int)$_GET["id"];

    $conn = mysqli_connect(  "localhost","root", "", "rochao_database");
	// check connection
	  if(!$conn) {
		echo 'Connection error: '. mysqli_connect_error();
    exit;
	  }
    $Query = "SELECT * FROM `user_accesories` WHERE id = '$UserId' ";

    $result = mysqli_query($conn, $Query);
    $CharappArray = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // good practice Apperantly for memory, might as well
    mysqli_free_result($result);
    mysqli_close($conn);
    $CharappArray = array_reduce($CharappArray,'array_merge',array());
    $CharappArray = implode(",", $CharappArray);
    list($ID, $Hat1, $Hat2, $Hat3, $Head, $Face, $Package, $Pants, $Shirts, $TShirts, $Gear) = explode(',', $CharappArray);
    /* Hat1, Hat2, Hat3, Head, Face, Package, Pants, Shirts, TSHirt, Gear  */
    /* Head: "6340101" Package: "311", Pants: "1812626", Shirts: "3056808", */

    $CharacterAppearanceTable = [ $Hat1, $Hat2, $Hat3, $Head, $Face, $Package, $Pants, $Shirts, $TShirts, $Gear];
    function EchoIfWorn ($Item) {
      if ($Item != "") {
        echo "http://www.rochao.xyz/asset/?id=".$Item.";";
      }
    }
    if ($UserId == $ID) {  
      echo "http://www.rochao.xyz/asset/BodyColors.ashx/?id=".$UserId.";";
      for ($i = 0; $i < 10; $i++) {
        EchoIfWorn($CharacterAppearanceTable[$i]);
      }
      } 
?>


