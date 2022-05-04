<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Pagsamo | Lyrics</title>
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
                <h4>Pagsamo</h4>
                <?php
                    $file = simplexml_load_file('../Hernandez_IT2B_OPMLyrics2022.xml');
                    foreach($file->song as $s){
                        if($s->title == "Pagsamo"){
                            echo "<p>Singer: $s->singer</p>";
                            break;
                        }
                    }
                ?>
                <p>
                Kung bibitaw nang mahinahon <br>
Ako ba'y lulubayan ng ating<br>
Mga kahapon na 'di na kayang<br>
Ayusin ng lambing<br>
<br>
Mga pangako ba'y sapat na<br>
Upang muli tayong ipagtagpo ng hinaharap<br>
Ba't pa ipapaalala 'di rin naman panghahawakan<br>
Ba't pa ipipilit kung 'di naman tayo ang<br>
<br>
Para sa isa't-isa ooh<br>
'Di ba sinta tayong dalawa lang noon<br>
Para sa isa't-isa oh hohh<br>
Ba't 'di sumang-ayon sa 'tin ang panahon<br>
<br>
Siguro nga'y wala nang natira<br>
Sa mga sinulat mo na para sa 'kin<br>
Alam kong luha ang bumubura<br>
Ngunit hayaan mo na lang<br>
<br>
Walang saysay ang panalangin ko<br>
Kung 'di ako ang hahanapin mo<br>
Kahit sigaw pa ang pagsamo ko sa 'yo<br>
Bakit 'di mo dama 'to<br>
<br>
Ba't pa ipapaalala 'di rin naman panghahawakan<br>
Ba't pa ipipilit kung 'di naman tayo ang<br>
<br>
Para sa isa't-isa ooh<br>
'Di ba sinta tayong dalawa lang noon<br>
Para sa isa't-isa oh hohh<br>
Ba't 'di sumang-ayon sa 'tin ang panahon<br>
<br>
Para sa isa't-isa ooh<br>
'Di ba sinta tayong dalawa lang noon<br>
Para sa isa't-isa<br>
Ba't 'di sumang-ayon sa 'tin ang panahon
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