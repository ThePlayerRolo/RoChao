<?php

$HeadMeshID = 18;
if (isset($_GET["id"])) {
    $HeadMeshID =  (int)$_GET["id"];
}


?>


<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.rochao.xyz/roblox.xsd" version="4">
	<External>null</External>
	<External>nil</External>
	<Item class="SpecialMesh" referent="RBX0">
		<Properties>
			<token name="LODX">2</token>
			<token name="LODY">2</token>
			<Content name="MeshId"><url>http://www.rochao.xyz/asset/?id=<?php echo $HeadMeshID ?></url></Content>
			<token name="MeshType">5</token>
			<string name="Name">Mesh</string>
			<Vector3 name="Offset">
				<X>0</X>
				<Y>0</Y>
				<Z>0</Z>
			</Vector3>
			<Vector3 name="Scale">
				<X>1</X>
				<Y>1</Y>
				<Z>1</Z>
			</Vector3>
			<Content name="TextureId"><null></null></Content>
			<Vector3 name="VertexColor">
				<X>1</X>
				<Y>1</Y>
				<Z>1</Z>
			</Vector3>
			<bool name="archivable">true</bool>
		</Properties>
	</Item>
</roblox>