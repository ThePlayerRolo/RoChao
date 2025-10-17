local plr = game.Players:CreateLocalPlayer(0)
plr:LoadCharacter()
plr.CharacterAppearance = "%charapp%"

local HeadColorPart = Instance.new("Part")
HeadColorPart.Parent = game.workspace
HeadColorPart.formFactor = "Symmetric"
HeadColorPart.Size = Vector3.new(2,1,1)
HeadColorPart.TopSurface = "Smooth"
HeadColorPart.BottomSurface = "Smooth"
local HeadColorMesh = game:GetObjects("http://www.rochao.xyz/asset/RenderH/?id=33")[1]
HeadColorMesh.Parent = HeadColorPart

local FacePart = Instance.new("Part")
FacePart.Parent = game.workspace
FacePart.formFactor = "Symmetric"
FacePart.Size = Vector3.new(2,1,1)
FacePart.TopSurface = "Smooth"
FacePart.BottomSurface = "Smooth"
local FaceMesh = game:GetObjects("http://www.rochao.xyz/asset/RenderH/?id=33")[1]
FaceMesh.Parent = FacePart
-- "rbxasset://textures\\face.png"
FaceMesh.TextureId = "http://www.rochao.xyz/asset/?id=10"
plr:RemoveCharacter()
plr:LoadCharacter()
HeadColorPart.CFrame = CFrame.new(0,20,25.5) * CFrame.fromEulerAnglesXYZ(0, math.pi*2, 0)
HeadColorPart.BrickColor = plr.Character.Head.BrickColor
FacePart.CFrame = CFrame.new(0,20,25.505) * CFrame.fromEulerAnglesXYZ(0, math.pi, 0)
plr.Character.Head:Remove();

local gearID = -1;
if gearID ~= -1 then
    plr.Character.Torso["Right Shoulder"].CurrentAngle = math.pi / 2

    game:GetObjects("http://www.rochao.xyz/asset/?id=%gearID%")[1].Parent = workspace.Player   
end

return game:GetService("ThumbnailGenerator"):Click("PNG", 420, 420, true)