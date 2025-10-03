
local userID = 0
local PlayerName = "dummy"
game.Players:CreateLocalPlayer(userID)
game.Players.LocalPlayer.Name = PlayerName
game.Players.LocalPlayer.CharacterAppearance = "http://www.rochao.xyz/charapp/?id=" .. tostring(userID)
game.Players.LocalPlayer:LoadCharacter()
game:GetService("RunService"):Run()

-- This code WILL NEVER MOVE TO C++ HAHAHHAHAHAHHAHUAJHZDhkasdjsajldsakdkjsajd
function characterRessurection(player)
	if player.Character then
		local humanoid = player.Character.Humanoid
		humanoid.Died:connect(function() wait(5) player:LoadCharacter() end)
	end
end

game:GetService("Players").PlayerAdded:connect(function(player)
	characterRessurection(player)
	player.Changed:connect(function(name)
		if name=="Character" then
			characterRessurection(player)
		end
	end)
end)