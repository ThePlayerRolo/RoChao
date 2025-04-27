<!DOCTYPE html>
<html>
<head>
<title>ROCHAO - Virtual Playworld</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    .ComicSansVirtualPlayWorld {
        font-family: "Comic Sans MS", "Comic Sans", cursive;
        position: relative;
        left:10px;
        top:-10px;

    }
    .ComicSansVirtualPlayWorld2 {
        font-family: "Comic Sans MS", "Comic Sans", cursive;
        position: relative;
        left:10px;
        top:-25px;

    }
    .VirtualPlayworld {
        width: 768px;
        height: 500px;
        border-style: solid;
        border-width: thin;
        position: absolute;
        left: 635px;
        top: 175px;

    }
    .BuilderManPlaces {
        width: 1024px;
        height: 100px;
        border-style: solid;
        border-width: thin;
        position: absolute;
        left: 380px;
        bottom: 45px;

    }
    .VirtualPlayworldVideo {
        position: relative;
        left:335px;
        bottom: -80px;
    }
    .VirtualICons {
        height: 52px; 
        width: 52px;
        border: solid;
        border-width: thin;
        position: relative;
        left: 10px;
        top: -30px;
    }
    .VirtualPlayWorldTop {
        font-family: "Comic Sans MS", "Comic Sans", cursive;

        position: relative;
        top: -115px;
        left: 75px;
    }
</style>
</head>
<body>
    <?php include 'Header.php';?>
    <div class= "VirtualPlayworld">
        <h1 class = "ComicSansVirtualPlayWorld">ROCHAO Virtual Playworld</h1>
        <h3 class = "ComicSansVirtualPlayWorld2">ROCHAO is Free!</h3>
        <img src="/images/BCBigBadge.png"  class = "VirtualICons">
        <h3 class = "VirtualPlayWorldTop">Build your personal Place</h3>
    </div> 
    <div class="BuilderManPlaces">

    </div>
    <div class = "BottomTextDiv">
    <?php include 'Footer.php';?>

</body>
</html>