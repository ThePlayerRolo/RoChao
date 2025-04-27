
local userID = 0
local PlayerName = "dummy"
game.Players:CreateLocalPlayer(userID)
game.Players.LocalPlayer.Name = PlayerName
game.Players.LocalPlayer.CharacterAppearance = "http://www.rochao.xyz/charapp/?id=" .. tostring(userID)
game.Players.LocalPlayer:LoadCharacter()
game:GetService("RunService"):Run()