HM = Instance.new("HtmlService")
HM.Parent = game

local w = game:service("HtmlService"):NewWindow()


w.DocumentComplete:connect(function ()
w:SetBody([==[

<table width="450" height="200" border="2">
<tr>
<td width="490" bgcolor="#000000"><font color="#FFFFFF">&nbsp;
</font><div align="center">
<p><font color="#FFFFFF"><b>TITLE</b></font></p>
<p><font color="#FFFFFF">by CREATOR</font></p>
<br>
<p><font color="#FFFFFF">NEW SUBJECT TITLE</font></p>
<br>
<p><font color="#FFFFFF">TEXT</font></p>
</div>
</td>
</tr>
</table>

]==])
	
w:Show()
end)

w:Navigate()