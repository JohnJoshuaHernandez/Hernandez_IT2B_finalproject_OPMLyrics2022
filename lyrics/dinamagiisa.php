<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Di Na Mag-iisa | Lyrics</title>
</head>
<body>
    <div class="container con">
        <div class="row u-full-width">
            <div class="nine columns">
                <a href="../pages/collection.php"><img src="../images/logo.png" alt="logo" width="50"></a>
            </div>
            <div class="three columns mar">
                <a href="../pages/mycollection.php">My OPM Collection</a>
            </div>
        </div>
        <div class="row margin" style="margin-top: 20px;">
            <div class="twelve columns">
                <h4>Di Na Mag-iisa</h4>
                <?php
                    $file = simplexml_load_file('../Hernandez_IT2B_OPMLyrics2022.xml');
                    foreach($file->song as $s){
                        if($s->title == "Di na mag-iisa"){
                            echo "<p>Singer: $s->singer</p>";
                            break;
                        }
                    }
                ?>
                <p>
                Di makapaniwala nandito na'ng hiling kay Bathala <br>
Nandito ka na 'di na ako mag-iisa<br>
<br>
Tanong ko sa tala ay bakit, pag-ibig ay bigay ng langit<br>
Nandito ka na 'di na ako mag-iisa<br>
<br>
Ngiti mo sa aking mga mata 'di hahayaang mawala<br>
Tingin mo lang alam ko nang ikaw na nga<br>
<br>
Sarado'ng puso't isipan 'di mo pa rin iniwan<br>
Naniwala ka, nanatili ka<br>
<br>
Takot sa pag-ibig ay nilisan, pag-ibig mo'y hindi ko bibitawan<br>
Nandito ka na 'di na ako mag-iisa<br>
<br>
Ngiti mo sa aking mga mata 'di hahayaang mawala<br>
Tingin mo lang alam ko nang ikaw na nga<br>
<br>
Ngiti mo sa aking mga mata 'di hahayaang mawala<br>
Tingin mo lang alam ko nang ikaw...<br>
<br>
Ikaw na nga pag-ibig na nais ko sa tuwina hindi na bibitaw<br>
Pangalan mo ang isisigaw<br>
<br>
(Ngiti mo sa aking mga mata 'di hahayaang mawala<br>
Tingin mo lang alam ko nang ikaw...)<br>
<br>
Di makapaniwala nandito nang hiling kay bathala<br>
Nandito ka na 'di na ako mag-iisa
                </p>
            </div>
        </div>

        <div class="row footer">
        <div class="one-third column">
            <div class="margin">
                <h5>Who made this</h5>
                <p>This website is made by John Joshua Hernandez, a college student from Marinduque State College.</p>
            </div>
        </div>
        <div class="one-third column">
            <div class="margin">
                <h5>Inspirations</h5>
                <p><li>AZLyrics.com</li></p>
                <p><li>Lyrics.com</li></p>
                <p><li>LyricsFreak.com</li></p>
            </div>
        </div>
        <div class="one-third column">
            <div class="margin">
                <h5>Contact me</h5>
                <p>Email: jjhnambio@gmail.com</p>
                <p>Phone Number: 09066250922</p>
            </div>
        </div>
        </div>
    </div>
</body>
</html>