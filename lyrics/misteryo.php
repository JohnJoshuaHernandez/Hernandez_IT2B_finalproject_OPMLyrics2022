<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Misteryo | Lyrics</title>
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
                <h4>Misteryo</h4>
                <?php
                    $file = simplexml_load_file('../Hernandez_IT2B_OPMLyrics2022.xml');
                    foreach($file->song as $s){
                        if($s->title == "Misteryo"){
                            echo "<p>Singer: $s->singer</p>";
                            break;
                        }
                    }
                ?>
                <p>
                Magdamag na kitang pinagmamasdan <br>
Hindi ko maintindihan<br>
Kung bakit di ako nagsasawa<br>
Na tingnan ang iyong mukha<br>
Mga kilos na ibang nilalaman<br>
Tayo lang ang nagkakaintindihan<br>
Oh hindi nila napapansin<br>
Mga titig mo na para lang saakin<br>
<br>
Binabalutan mo ako ng iyong misteryo<br>
Napapa buntong hininga<br>
Pinapaisip mo ako oh anong misteryo<br>
Pero sa wakas ay nandito ka na<br>
<br>
Nakatitig nalang sa kawalan<br>
Naghahanap ng dahilan<br>
Kung bakit di ako makawala<br>
Sa saya na iyong dala<br>
Tinutunaw ako ng lambing<br>
Ng iyong tinig na para lang sa akin<br>
Oh hindi ba sila nagtataka<br>
Sa mga bulungan natin<br>
<br>
Binabalutan mo ako ng iyong misteryo<br>
Napapa buntong hininga<br>
Pinapaisip mo ako oh anong misteryo<br>
Pero sa wakas ay nandito ka na<br>
<br>
Sa iyong bawat pag kanta<br>
Alam kong napapaisip sila<br>
Kung ako nga ba ang dahilan<br>
Sa bawat pagpatak ng luhang<br>
Dulot ng kasiyahan<br>
Na sana ako ang dahilan<br>
At sa wakas andiyan ka na<br>
<br>
Binabalutan mo ako ng iyong misteryo<br>
Napapa buntong hininga<br>
Pinapaisip mo ako oh anong misteryo<br>
Pero sa wakas ay nandito ka na<br>
Pero sa wakas ay nandito ka na<br>
At sa wakas nandito ka na<br>
Sa wakas ay nandito ka na

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