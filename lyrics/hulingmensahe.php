<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Huling Mensahe | Lyrics</title>
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
                <h4>Huling Mensahe</h4>
                <?php
                    $file = simplexml_load_file('../Hernandez_IT2B_OPMLyrics2022.xml');
                    foreach($file->song as $s){
                        if($s->title == "Huling mensahe"){
                            echo "<p>Singer: $s->singer</p>";
                            break;
                        }
                    }
                ?>
                <p>
                Hanggang dito na lamang ba <br>
Lagi na lang nasasaktan ng ganito<br>
<br>
Ano bang aking nagawa bigla kang nanlamig<br>
Ibinigay ko naman lahat<br>
Pati ang buhay ko<br>
Eto ba ang sukli sa pagmamahal na inalay ko sa 'yo<br>
Puno ng sakit, puno ng hapdi at pagdurusa<br>
<br>
Eto na bang huling<br>
Eto na bang huling<br>
Pagkikita, pagsasama<br>
<br>
Hanggang dito na lamang ba<br>
Lagi na lang masasaktan<br>
Hindi na ako iibig pa para hindi na lumuha pa ng ganito<br>
<br>
Di mo man lang ba naisip masayang araw nating dalawa<br>
Paano na ang sumpaan at pangarap natin sa isa't isa<br>
Bigla ka na lang bumitaw at sinuko na lang ang lahat<br>
<br>
Eto na bang huling<br>
Eto na bang huling<br>
Pagkikita, pagsasama<br>
<br>
Hanggang dito na lamang ba<br>
Lagi na lang masasaktan<br>
Hindi na ako iibig pa para hindi na lumuha pa ng ganito<br>
<br>
Pinilit kong ipagsiksikan ang sarili ko sayo<br>
Ang kitid pinagsiksikan basta lamang mabuo<br>
Wala na kong paki kung tama pa ba 'to<br>
Baka sakaling manalo kung lalaban pa ako<br>
Ngunit parang ako'y dehado<br>
Hindi pa ako nagsisimula pinaparamdam mo agad sa akin na talo<br>
Kaya huling mensahe ko sana'y 'yong mapakinggan<br>
At di na rin ako aasa na meron pang babalikan<br>
Uunti-untiin ko na ring buburahin ang ating nasimulan<br>
Pero alam mo ang pinakamahirap<br>
Ang hirap mong kalimutan<br>
<br>
Eto na bang huli<br>
Eto na bang huli<br>
Pagkikita pagsasama<br>
<br>
Hanggang dito na lamang ba<br>
Lagi na lang nasasaktan<br>
Hindi na ako iibig pa para hindi na lumuha pa ng ganito
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