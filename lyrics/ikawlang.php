<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Ikaw Lang | Lyrics</title>
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
                <h4>Ikaw Lang</h4>
                <?php
                    $file = simplexml_load_file('../Hernandez_IT2B_OPMLyrics2022.xml');
                    foreach($file->song as $s){
                        if($s->title == "Ikaw lang"){
                            echo "<p>Singer: $s->singer</p>";
                            break;
                        }
                    }
                ?>
                <p>
                Oh, kay gandang pagmasdan ang iyong mga mata <br>
Kumikinang-kinang<br>
'Di ko maintindihan<br>
<br>
Ang iyong mga tingin<br>
Labis ang mga ning-ning<br>
Langit ay bumaba<br>
Bumababa pala ang tala<br>
<br>
Tumingin ka sa aking mga mata at<br>
Hindi mo na kailangan pang<br>
Magtanong ng paulit-ulit<br>
Ikaw lang ang iniibig at<br>
Kung di kumbinsido'y magtiwala ka<br>
Hawakan ang puso't maniwala na<br>
Ikaw lang ang siyang inibig<br>
Ikaw lang ang iibigin<br>
<br>
At sa iyong paglalambing ako ay nahulog din<br>
'Di ko alam kung ano ang gagawin<br>
'Di ko alam kung saan titingin<br>
Halik sa labi, tinginan natin<br>
'Di akalaing mahuhulog ka sa 'kin<br>
<br>
Tumingin ka sa aking mga mata at<br>
Hindi mo na kailangan pang<br>
Magtanong ng paulit-ulit<br>
Ikaw lang ang iniibig at<br>
Kung di kumbinsido'y magtiwala ka<br>
Hawakan ang puso't maniwala na<br>
Ikaw lang ang siyang inibig<br>
Ikaw lang ang iibigin sinta...<br>
<br>
At sa paglisan ng araw akalay di ka mahal<br>
At ang nadarama'y di magtatagal<br>
Malay ko bang hindi mapapagal<br>
Iibigin kita kahit gaano pa katagal<br>
<br>
Tumingin ka sa aking mga mata at<br>
Hindi mo na kailangan pang<br>
Magtanong ng paulit-ulit<br>
Ikaw lang ang iniibig at<br>
Kung di kumbinsido'y magtiwala ka<br>
Hawakan ang puso't maniwala na<br>
Ikaw lang ang siyang inibig<br>
Ikaw lang ang iibigin<br>
<br>
Lalalalalalalalalalalalala...<br>
<br>
Sinta...

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