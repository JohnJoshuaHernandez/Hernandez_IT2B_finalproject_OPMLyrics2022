<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Hanggang dito nalang | Lyrics</title>
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
                <h4>Hanggang Dito Nalang</h4>
                <?php
                    $file = simplexml_load_file('../Hernandez_IT2B_OPMLyrics2022.xml');
                    foreach($file->song as $s){
                        if($s->title == "Hanggang dito nalang"){
                            echo "<p>Singer: $s->singer</p>";
                            break;
                        }
                    }
                ?>
                <p>
                Bakit di man lang naramdaman, <br>
Na ang iyong pagmamahal,<br>
...ay mayroong hanggan.<br>
<br>
Bakit di nakitang may hadlang,<br>
Sa ating pagmamahal,<br>
...ako ba ang dahilan.<br>
<br>
Wala na yung dating,<br>
Pagtingin sa damdamin,<br>
umaasa pa sana,<br>
...ako ang iyong kasama.<br>
<br>
Handa kang lisanin,<br>
Ang para sa atin,<br>
...wo oh oh.<br>
<br>
Chorus 1:<br>
Ang pag-ibig ko'y ikaw,<br>
Ang langit ay bughaw,<br>
Hindi na namalayan,<br>
...na ako pala ay nagkulang.<br>
<br>
Hanggang dito na lang ba?<br>
Wala na bang pag-asa?<br>
Kundi ako ang kailangan,<br>
Handa ng magpaalam.<br>
...wo oh ohh. <br>
<br>
Sana ay akin man lang napagbigyan<br>
ang ating pagmamahalan, <br>
...na mahanap ang kailangan.<br>
<br>
Sana ay aking maintindihan,<br>
Kapag ikaw ay nagmahal ay,<br>
...handa rin masaktan<br>
<br>
Handa bang sanayin,<br>
Ang aking damdamin,<br>
na hindi ka kasama<br>
...at ang mga ala-ala.<br>
<br>
Handa bang hanapin,<br>
Ang para sa akin,<br>
....wo oh ohh<br>
<br>
Chorus 1:<br>
Ang pag-ibig ko'y ikaw,<br>
Ang langit ay bughaw,<br>
Hindi na namalayan,<br>
...na ako pala ay nagkulang.<br>
<br>
Hanggang dito na lang ba?<br>
Wala na bang pag-asa?<br>
Kundi ako ang kailangan,<br>
Handa ng magpaalam.<br>
...wo oh ohh. <br>
<br>
(Instrumental)<br>
<br>
Chorus 2:<br>
Ang pag-ibig ko'y ikaw,<br>
Ang langit ay bughaw,<br>
hanapin maging malaya,<br>
...at tanggapin ang nakatadhna.<br>
<br>
Hnaggang dito na lang<br>
ang ating pagmamahalan<br>
at hindi ako ang kailangan<br>
Handa ng mag-paalam<br>
...wo oh ohh.<br>
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