------ Util functions start here -----

--- Returns a part in the shape of the robloxian head.
--- @param brickColor BrickColor --Brick Color of the part
--- @param parent Object --Parent of part
--- @return Part
local function CreateHeadShapedPart(brickColor, parent)
    local Part = Instance.new("Part")
    Part.formFactor = "Symmetric"
    Part.Size = Vector3.new(2,1,1)
    Part.TopSurface = "Smooth"
    Part.BottomSurface = "Smooth"
    Part.BrickColor = brickColor;
    Part.Parent = parent
    return Part;
end

--- Returns a Head mesh with a Object Parent
--- @param url string --MeshID url
--- @param parent Object --Object Parent
--- @return SpecialMesh
local function createHeadMesh(url, parent)
    local HeadMesh = nil
    if url ~= "" then
        HeadMesh = game:GetObjects(url)[1]
    else 
        HeadMesh = game:GetObjects("rbxasset://fonts/Head.rbxm")[1];
    end
    HeadMesh.Parent = parent
    return HeadMesh
end

--- Sets the face of a head mesh
--- @param mesh SpecialMesh
--- @param url string --Texture Url
local function setHeadFace(mesh, url)
    if url ~= "" then
        mesh.TextureId = url
    else
        mesh.TextureId = "rbxasset://textures\\face.png"
    end
end

------ Util functions end here ----

local headUrl = "http://www.rochao.xyz/asset/RenderH/?id=%headUrl%"


local HeadColorPart = CreateHeadShapedPart(BrickColor.new(194), game.workspace)
local HeadColorMesh = createHeadMesh(headUrl, HeadColorPart)
local FacePart = CreateHeadShapedPart(BrickColor.new(194), game.workspace)
local FaceMesh =  createHeadMesh(headUrl, FacePart)
setHeadFace(FaceMesh, "")

HeadColorPart.CFrame = CFrame.new(0,0,0) * CFrame.fromEulerAnglesXYZ(0, math.pi*2, 0)
-- You need the EulerAnglesXYZ here so you can see the face, idrk why
FacePart.CFrame = CFrame.new(0, 0,0.005) * CFrame.fromEulerAnglesXYZ(0, math.pi, 0)

return game:GetService("ThumbnailGenerator"):Click("PNG", 420, 420, true)
