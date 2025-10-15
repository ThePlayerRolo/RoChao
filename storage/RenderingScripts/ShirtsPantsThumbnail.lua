local plr = game.Players:CreateLocalPlayer(0)
plr:LoadCharacter()
plr.CharacterAppearance = "http://www.rochao.xyz/asset/?id=0;http://www.rochao.xyz/asset/?id=%asset%"

return game:GetService("ThumbnailGenerator"):Click("PNG", 450, 600, true)