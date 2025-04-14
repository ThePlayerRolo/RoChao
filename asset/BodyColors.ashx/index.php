<?php 
    header("Content-Type: text/plain");
    $UserId = (int)$_GET["id"];
    if ($UserId == 0) {  
    $HeadColor = 24;
    $LeftArmColor = 24;
    $RightArmColor = 24;
    $RightLegColor = 21;
    $LeftLegColor = 21;
    $TorsoColor = 1003;
    } 
?>
<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.rochao.com/roblox.xsd" version="4">
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