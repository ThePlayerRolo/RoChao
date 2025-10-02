<?php
header(header: "Content-Type: text/plain");
echo "game.Players:CreateLocalPlayer(0)\n";
echo "game.Players.LocalPlayer.Name = \"Player1\"\n";
echo "game.Players.LocalPlayer:LoadCharacter()\n";
$charapp = file_get_contents("http://www.rochao.xyz/charapp/?id=0");
$charapp = preg_replace('/\s+/', '', $charapp);
printf("game.Players.LocalPlayer.CharacterAppearance = \"%s\"\n", $charapp);
echo"game:GetService(\"RunService\"):Run()\n";
?>
