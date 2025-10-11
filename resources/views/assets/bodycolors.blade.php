<?php 
    use App\Models\BodyColors;

    header("Content-Type: text/plain");

    $UserID = (int)$_GET["id"];
    $UserBodyColors = BodyColors::find($UserID);
    

?>
<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.rochao.xyz/roblox.xsd" version="4">
    <External>null</External>
    <External>nil</External>
    <Item class="BodyColors" referent="RBX0">
        <Properties>
            <int name="HeadColor"><?php echo $UserBodyColors->HeadColor?></int>
            <int name="LeftArmColor"><?php echo $UserBodyColors->LeftArmColor?></int>
            <int name="LeftLegColor"><?php echo $UserBodyColors->LeftLegColor?></int>
            <string name="Name">Body Colors</string>
            <int name="RightArmColor"><?php echo $UserBodyColors->RightArmColor?></int>
            <int name="RightLegColor"><?php echo $UserBodyColors->RightLegColor?></int>
            <int name="TorsoColor"><?php echo $UserBodyColors->TorsoColor?></int>
            <bool name="archivable">true</bool>
        </Properties>
    </Item>
</roblox>