<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Lambing | Lyrics</title>
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
                <h4>Lambing</h4>
                <?php
                    $file = simplexml_load_file('../Hernandez_IT2B_OPMLyrics2022.xml');
                    foreach($file->song as $s){
                        if($s->title == "Lambing"){
                            echo "<p>Singer: $s->singer</p>";
                            break;
                        }
                    }
                ?>
                <p>
                Matthaios be wonderin' <br>

Gusto ko lang naman maramdaman ang lambing mo (ang lambing mo)<br>
'Di kayang tapatan ng sino man ang yakap mo (ang yakap mo)<br>
Kaya halika na't sa 'kin tumabi (yeah)<br>
Wag kang lalayo, please, wag din aalis (no, no)<br>
Dito ka na lang magpalipas ng gabi (hey)<br>
I will be your peace kahit sandali (yes, sir)<br>
<br>
Wag mo munang titingnan ang iyong orasan (no)<br>
Pwede bang atensyon mo sa akin ilaan (yeah)<br>
Kahit ang mga gawain ay kaligtaan (huh)<br>
Kahit sandali lang, sana ay mapagbigyan (yuh-yeet)<br>
Babe, I'm gonna cruise around the city, you can join me (wooh)<br>
Night ride, night lights, be a little crazy (skrt)<br>
Pwede rin mag-2 botts o kaya naman um-FT (hey)<br>
I'm your plus 1 tonight, we don't have to keep this lowkey<br>
<br>
Gusto ko lang naman maramdaman ang lambing mo (ang lambing mo)<br>
'Di kayang tapatan ng sino man ang yakap mo (ang yakap mo)<br>
Kaya halika na't sa 'kin tumabi (yeah)<br>
Wag kang lalayo, please, wag din aalis (no, no)<br>
Dito ka na lang magpalipas ng gabi (hey)<br>
I will be your peace kahit sandali (yes, sir)<br>
<br>
Pwede pa-deliver sabay handa ng mesa (hey)<br>
Para dito lang sa bahay kung tinatamad ka (huh)<br>
We can watch "Vincenzo" or any K-Drama (wooh)<br>
Marathon ng MCU, pwede, ikaw bahala (I love you 3,000)<br>
Kahit s'an basta kasama kita (wooh)<br>
'Yon lang ang mahalaga (what)<br>
Makapiling ka, yung kayakap ka, 'lang katumbas 'to na saya (huh)<br>
Lumulutang sa alapaap (aye)<br>
Natupad aking pangarap (wooh)<br>
Nakakita ng anghel sabay pag-ibig lumaganap<br>
<br>
Gusto ko lang naman maramdaman ang lambing mo (ang lambing mo)<br>
'Di kayang tapatan ng sino man ang yakap mo (ang yakap mo)<br>
Kaya halika na't sa 'kin tumabi (yeah)<br>
Wag kang lalayo, please, wag din aalis (no, no)<br>
Dito ka na lang magpalipas ng gabi (hey)<br>
I will be your peace kahit sandali (yes, sir)<br>
<br>
You already know, MIDA$ Records
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