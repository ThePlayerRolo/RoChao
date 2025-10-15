<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <link href="{{ asset('css/MainPage/MainPage.css') }}" rel="stylesheet">
    <title>ROCHAO - A FREE Virtual World-Building Game with Avatar Chat, 3D Environments, and Physics</title>
</head>

<body>
    <div class="Container">
        <div style = "margin-bottom: 5px;"> </div>
        <x-header></x-header>
        <div class="Body">
            <div id="SplashContainer">
                <div class = "SignInPane"> 
                    <div class = "LoginViewContainer">
                        <div class = "LoginView">
                            <h5>Member Login</h5>
                            <div class = "Laravel-Login"> 
                                <div class = "LoginPanel">
                                    <label class = "Label">Character Name</label>
                                    <br>
                                    <input type="text" tabindex="1" class="Text">
                                </div>
                                <div class = "LoginPanel">
                                    <label class = "Label">Password</label>
                                    <br>
                                    <input type="password" tabindex="2" class="Text">
                                </div>
                                <div class = "SubmitPanel">
                                    <a tabindex="4" class="Button" href="/Error">Login</a> 
                                </div>
                                <div class="PasswordRecoveryPanel">
								    <a tabindex="5" href="Login/ResetPasswordRequest/">Forgot your password?</a>
							    </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class = "Figure">
                        <a id="ctl00_cphRoblox_LoginView1_ImageFigure" disabled="disabled" title="Figure" onclick="return false" style="display:inline-block;">
                            <img src="http://www.rochao.xyz/img/NewFrontPageGuy.png" border="0" alt="Figure" blankurl="">
                        </a>
                    </div>
                </div>
                <div class="VirtualPlayworld">
                    <h2 class="ComicSansVirtualPlayWorld">ROCHAO Virtual Playworld</h2>
                    <h3 class="ComicSansVirtualPlayWorld2">ROCHAO is Free!</h3>
                    <ul class="ThingsToDoList">
                        <li class="PointPlace">
                            <h3>Build your personal Place</h3>
                            <div>Create buildings, vehicles, scenery, and traps with thousands of virtual bricks.</div>
                        </li>
                        <li class="PointFriends">
                            <h3>Meet new friends online</h3>
                            <div>Visit your friend's place, chat in 3D, and build together.</div>
                        </li>
                        <li class="PointBomb">
                            <h3>Battle in the Brick Arenas</h3>
                            <div>Play with the slingshot, rocket, or other brick battle tools. Be careful not to get "bloxxed".</div>
                        </li>
                    </ul>
                    <div class = "Showcase">   
                        <iframe id="embedplayer" src="https://www.youtube-nocookie.com/embed/NUS-kAd9Niw" width="400" height="326" allowfullscreen="" scrolling="off" frameborder="0" data-ruffle-polyfilled="">
                        </iframe>
                    </div>
                    <div class="Install">
		                <div class="CompatibilityNote">Works with your<br>Windows PC!</div>
		                <div class="DownloadAndPlay"><a id="" href="Login/New.aspx?ReturnUrl=%2fGames.aspx"><img src="http://www.rochao.xyz/img/DownloadAndPlay.png" alt="FREE - Download and Play!" border="0"></a></div>
	                </div>
                    <div class="ForParents">
		                <a title="ROBLOX is kid-safe!" href="/Parents/" style="display:inline-block;">
                            <img title="ROBLOX is kid-safe!" src="http://www.rochao.xyz/img/GamerSeal.jpg" border="0">
                        </a>
	                </div>
                </div>
            </div>
        </div>
        <x-footer></x-footer>
    </div>
</body>

</html>