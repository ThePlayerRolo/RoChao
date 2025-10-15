local plr = game.Players:CreateLocalPlayer(0)
plr:LoadCharacter()
plr.CharacterAppearance = "%charapp%"

return game:GetService("ThumbnailGenerator"):Click("PNG", 450, 600, true)