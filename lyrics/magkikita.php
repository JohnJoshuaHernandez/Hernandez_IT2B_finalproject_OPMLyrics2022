<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Magkikita | Lyrics</title>
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
                <h4>Magkikita</h4>
                <?php
                    $file = simplexml_load_file('../Hernandez_IT2B_OPMLyrics2022.xml');
                    foreach($file->song as $s){
                        if($s->title == "Magkikita"){
                            echo "<p>Singer: $s->singer</p>";
                            break;
                        }
                    }
                ?>
                <p>
                Sinusubok man ng panahon <br>
Ang ating mga sarili sa darating na bukas<br>
Unti-unting nasisilayan ang munting liwanag<br>
Sa pagsikat ng araw<br>
<br>
At kahit na anong pagsubok man ang harapin<br>
Hinding-hindi susuko<br>
Sama-sama ang mga pangarap aabutin<br>
<br>
Basta walang susuko<br>
Umiyak kung kinakailangan<br>
Tapos ay babangon<br>
Palaging tatandaan 'di ka nag-iisa<br>
Buksan mo lang ang iyong mata<br>
Muling maniwala tayo'y makakalaya<br>
Huminga ng malalim<br>
'Yan ay ating kakayanin, 'di ka nag-iisa<br>
Tayo'y muling magkikita<br>
<br>
Kahit na nakakapagod nang umasa<br>
Magpapatuloy sa hamon ng buhay<br>
Araw-araw mang tinatangay ng mga alon<br>
Sabay-sabay na aahon<br>
<br>
At kahit na anong pagsubok man ang harapin<br>
Hinding-hindi susuko<br>
Sama-sama ang mga pangarap aabutin<br>
<br>
Basta walang susuko<br>
Umiyak kung kinakailangan<br>
Tapos ay babangon<br>
Palaging tatandaan 'di ka nag-iisa<br>
Buksan mo lang ang iyong mata<br>
Muling maniwala tayo'y makakalaya<br>
Huminga ng malalim<br>
'Yan ay ating kakayanin, 'di ka nag-iisa<br>
Tayo'y muling magkikita (Magkikita)<br>
<br>
Basta walang susuko<br>
Umiyak kung kinakailangan<br>
Tapos ay babangon<br>
Palaging tatandaan 'di ka nag-iisa<br>
'Di ka nag-iisa, 'di ka nag-iisa<br>
Tayo'y muling magkikita
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