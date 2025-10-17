local plr = game.Players:CreateLocalPlayer(0)
plr:LoadCharacter()
plr.CharacterAppearance = "http://www.rochao.xyz/asset/?id=0"

plr.Character.Torso["Right Shoulder"].CurrentAngle = math.pi / 2

game:GetObjects("http://www.rochao.xyz/asset/?id=%asset%")[1].Parent = workspace.Player

return game:GetService("ThumbnailGenerator"):Click("PNG", 450, 600, true)