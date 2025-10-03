%qpdBB0fCWdh2uW05ZfY9GxjiZg7bZPha2DIgM9sPEv+1v1eO5gwCe154cZl5R0SlC2nHxQXeaJuGBLj2+fk4hbBM68xY1/+bDPcNE3EzAT6kIm2BlSGLEZualMvVHq2L5Qb4mSdXx/k/K9sm3YWR74FWtU/FohMuerDl3QqHYHI=%
visit = game:GetService("Visit")

game:GetService("ChangeHistoryService"):SetEnabled(false)
--if http://www.roblox.com/Asset/ then
--	game:GetService("ContentProvider"):SetAssetUrl("http://www.roblox.com/Asset/")
--end

local message = Instance.new("Message")
message.Parent = workspace

workspace:SetPhysicsThrottleEnabled(true)

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
			print("Reset Character")
		end
	end)
end)

function doVisit()
    message.Text = "Loading Game"
    if true then
        game:Load("http://www.rochao.xyz/asset/?id=272")
        --visit:SetUploadUrl("http://www.rochao.xyz/Data/Upload.php?assetid=272")
    end
end

message.Text = "Running"
game:GetService("RunService"):Run()

message.Text = "Creating Player"
	if true then
		player = game:GetService("Players"):CreateLocalPlayer(0)
        player.Name = "dummy"
	else
		player = game:GetService("Players"):CreateLocalPlayer(0)
	end
	player.CharacterAppearance = "http://www.rochao.xyz/charapp/?id=0"
	player:LoadCharacter()

message.Text = "Setting GUI"
player:SetSuperSafeChat(false)

message.Parent = nil