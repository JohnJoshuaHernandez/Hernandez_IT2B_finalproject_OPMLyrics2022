<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Asan Kana Ba | Lyrics</title>
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
                <h4>Asan Kana Ba</h4>
                <?php
                    $file = simplexml_load_file('../Hernandez_IT2B_OPMLyrics2022.xml');
                    foreach($file->song as $s){
                        if($s->title == "Asan ka na ba"){
                            echo "<p>Singer: $s->singer</p>";
                            break;
                        }
                    }
                ?>
                <p>Bakit lagi nalang ba ako mag isa <br>
Aasa nalang ba ako sa pantasya<br>
<br>
Nasan ka na ba<br>
Maghihintay nga ba<br>
Para kong tangang<br>
Nalulungkot sa wala<br>
Kahit san tumingin<br>
Ang daming nahuhulog<br>
Sa isat isa<br>
Bat sakin ay wala<br>
<br>
Lumapit ka<br>
Asan ka na ba<br>
Wala naman akong gusto na iba<br>
Ang sakit kahit walang nananakit<br>
Naghihintay ako<br>
Hinahanap kita<br>
<br>
Minsan iniisip ko<br>
Kung panget ba ko<br>
Kasi asan na binibini't<br>
Habang buhay ko<br>
<br>
Di ba talaga sapat ang tulad ko<br>
Sa buhay na isang prinsesa<br>
Na tulad mo<br>
<br>
Magtitiwala ba<br>
Sa sinasabing tadhana<br>
Pano ba naman<br>
Maniniwala<br>
Kung kahit san tumingin<br>
Ang daming nahuhulog sa<br>
Isat isa<br>
Bat sakin ay wala<br>
<br>
Lumapit ka<br>
Asan ka na ba<br>
Wala naman akong gusto na iba<br>
Ang sakit kahit walang nananakit<br>
Naghihintay ako<br>
Akoy nalilito<br>
<br>
Lumapit ka<br>
Asan ka na ba<br>
Hinihintay lang naman kasi kita<br>
Magpakita ka naman<br>
Saking mata<br>
Andito lang ako<br>
Hinahanap hanap kita<br>
<br>
Hinahanap hanap kita<br>
Gusto ko lang masilayan<br>
Ang kislap ng yong mata<br>
(Asan ka na ba)<br>
<br>
Lumapit ka<br>
Asan ka na ba<br>
Wala naman akong gusto na iba<br>
Ang sakit kahit walang nananakit<br>
Naghihintay ako<br>
Akoy nalilito<br>
<br>
Lumapit ka<br>
Asan ka na ba<br>
Hinihintay lang naman kasi kita<br>
Magpakita ka naman<br>
Saking mata<br>
Andito lang ako<br>
Hinahanap kita</p>
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