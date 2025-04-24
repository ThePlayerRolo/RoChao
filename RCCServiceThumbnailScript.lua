local plr = game.Players:CreateLocalPlayer(0)
plr:LoadCharacter()
local PLRBodyColors =  Instance.new("BodyColors", game.Workspace.Player)
PLRBodyColors.TorsoColor = BrickColor.new("Black")
PLRBodyColors.HeadColor = BrickColor.new("Bright yellow")
PLRBodyColors.LeftArmColor = BrickColor.new("Bright yellow")
PLRBodyColors.RightArmColor = BrickColor.new("Bright yellow")
PLRBodyColors.LeftLegColor = BrickColor.new("Bright red")
PLRBodyColors.RightLegColor = BrickColor.new("Bright red")
local TShirt = Instance.new("ShirtGraphic", game.Workspace.Player)
TShirt.Graphic = "rbxasset://textures/BlazikenTShirt.png"
game:GetObjects("rbxasset://fonts/FieryEggMesh.rbxm")[1].Parent = workspace.Player
-- 450,600
print(game:GetService("ThumbnailGenerator"):Click("PNG", 200, 200, true))