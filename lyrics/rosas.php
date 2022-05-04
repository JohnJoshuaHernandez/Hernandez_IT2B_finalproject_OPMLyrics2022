<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Rosas | Lyrics</title>
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
                <h4>Rosas</h4>
                <?php
                    $file = simplexml_load_file('../Hernandez_IT2B_OPMLyrics2022.xml');
                    foreach($file->song as $s){
                        if($s->title == "Rosas"){
                            echo "<p>Singer: $s->singer</p>";
                            break;
                        }
                    }
                ?>
                <p>
                [Verse 1: Nica del Rosario] <br>
Huwag kang mabahala<br>
Ikaw ay mahalaga<br>
Hindi kita pababayaan<br>
Hindi tayo naiiba<br>
At sana'y paniwalaan<br>
Na pipiliin ka araw-araw<br>
<br>
[Pre-Chorus: Nica del Rosario]<br>
At alam ko ang aking kaya<br>
Alam ko ang hindi<br>
Alam ko ang kailangan<br>
Upang makapagsilbi<br>
Hangga’t may kabutihan<br>
Hangga't may pag-ibig<br>
Liwanag ang mananaig<br>
<br>
[Chorus: Nica del Rosario]<br>
At hindi ko maipapangako<br>
Ang kulay rosas na mundo para sa'yo<br>
At hindi ko maiilawan ang lahat ng anino<br>
Pero sisikapin ko at hindi ako magpapahinga<br>
Hangga’t hindi mo pa magawang<br>
Muling ipagmalaki na ika'y isang Pilipino<br>
<br>
[Verse 2: Gab Pangilinan]<br>
Huwag kang matatakot<br>
May kasangga ka sa laban na ito<br>
Sabay nating gisingin ang nasyon<br>
<br>
[Pre-Chorus: Gab Pangilinan]<br>
At alam ko ang aking kaya<br>
Alam ko ang hindi<br>
Alam ko ang kailangan<br>
Upang makapagsilbi<br>
Hangga't may kabutihan<br>
Hangga't may pag-ibig<br>
Liwanag ang mananaig<br>
<br>
[Chorus: Both]<br>
At hindi ko maipapangako<br>
Ang kulay rosas na mundo para sa'yo<br>
At hindi ko maiilawan ang lahat ng anino<br>
Pero sisikapin ko at hindi ako magpapahinga<br>
Hangga't hindi mo pa magawang<br>
Muling ipagmalaki na ika'y isang<br>
<br>
[Bridge: Gab Pangilinan, Nica del Rosario, Both]<br>
Pilipinong may pusong sagutin ang tugon<br>
Pilipinong may tapang na muling bumangon<br>
Pilipinong buo ang paninindigan<br>
Alam ang tama at totoo<br>
Samahan mo ako<br>
<br>
[Chorus: Both]<br>
At hindi ko maipapangako (At hindi ko)<br>
Ang kulay rosas na mundo para sa'yo (Kulay rosas)<br>
At hindi ko maiilawan ang lahat ng anino (Oh-oh-oh)<br>
Pero sisikapin ko at hindi ako magpapahinga<br>
Hangga’t hindi mo pa magawang<br>
Muling ipagmalaki na ika’y isang<br>
Matatag at matapang at mabuti at mapagmahal na Pilipino<br>
<br>
[Outro: Gab Pangilinan, Nica del Rosario]<br>
Pilipino<br>
Pilipino<br>
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