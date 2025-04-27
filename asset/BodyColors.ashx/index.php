<?php 
    header("Content-Type: text/plain");
    $UserId = (int)$_GET["id"];
    $conn = mysqli_connect(  "localhost","root", "", "rochao_database");
	// check connection
	  if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	  }
    $Query = "SELECT * FROM `user_bodycolors` WHERE id = '$UserId' ";

    $result = mysqli_query($conn, $Query);
    $CharappArray = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // good practice Apperantly for memory, might as well
    mysqli_free_result($result);
    mysqli_close($conn);
    $CharappArray =array_reduce($CharappArray,'array_merge',array());
    $CharappArray = implode(",", $CharappArray);
    list($ID,  $HeadColor, $LeftArmColor, $RightArmColor,$RightLegColor,$LeftLegColor, $TorsoColor) = explode(',', $CharappArray);

 
?>
<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.rochao.xyz/roblox.xsd" version="4">
    <External>null</External>
    <External>nil</External>
    <Item class="BodyColors" referent="RBX0">
        <Properties>
            <int name="HeadColor"><?php echo $HeadColor?></int>
            <int name="LeftArmColor"><?php echo $LeftArmColor?></int>
            <int name="LeftLegColor"><?php echo $LeftLegColor?></int>
            <string name="Name">Body Colors</string>
            <int name="RightArmColor"><?php echo $RightArmColor?></int>
            <int name="RightLegColor"><?php echo $RightLegColor?></int>
            <int name="TorsoColor"><?php echo $TorsoColor?> </int>
            <bool name="archivable">true</bool>
        </Properties>
    </Item>
</roblox>