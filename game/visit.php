%m0/pAUzQgM1s3saeFnt6cwYBBbUz0i/8biCuQ9Vr6r5a+5ncXGG4D4JK14yiFj221hYyFwoDd8rM/f9fv4kcBW3wbDAV+001Mqv4SKu7tjFs+FCMqcII9tyKNzUnhaGbk1p/A1nryXUTQGbFtgMtx8kEw+nGruAKAvyQGQQnp+E=%
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
		--game:Load("http://www.rochao.xyz/asset/?id=280")
		--visit:SetUploadUrl("http://www.roblox.com/Data/Upload.ashx?assetid=2648025")
	end

	message.Text = "Running"
	game:GetService("RunService"):Run()

	message.Text = "Creating Player"
	if true then
		player = game:GetService("Players"):CreateLocalPlayer(0)
		player.Name = "ThePlayerRolo"
	else
		player = game:GetService("Players"):CreateLocalPlayer(0)
	end
	player.CharacterAppearance = "http://www.rochao.xyz/charapp/?id=0"
	player:LoadCharacter()

	message.Text = "Setting GUI"
	player:SetSuperSafeChat(false)
	
	--[[if true then
		message.Text = "Setting Ping"
		visit:SetPing("http://www.roblox.com/Game/ClientPresence.ashx?PlaceID=2648025&UserID=582128", 300)

		message.Text = "Sending Stats"
		game:HttpGet("http://www.roblox.com/Game/Statistics.ashx?TypeID=4&UserID=582128&AssociatedUserID=582128&AssociatedPlaceID=2648025")
	end]]
end

success, err = pcall(doVisit)

if success then
	message.Parent = nil
else
	print(err)
	if true then
		visit:SetUploadUrl("")
	end
	wait(5)
	message.Text = "Error on visit: " .. err
	if true then
		--game:HttpPost("http://www.roblox.com/Error/Lua.ashx?PlaceID=2648025&upload=2648025", "Visit.lua: " .. err)
	end
end