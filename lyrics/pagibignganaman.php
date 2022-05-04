<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Pag-ibig Nga Naman | Lyrics</title>
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
                <h4>Pag-ibig Nga Naman</h4>
                <?php
                    $file = simplexml_load_file('../Hernandez_IT2B_OPMLyrics2022.xml');
                    foreach($file->song as $s){
                        if($s->title == "Pag-ibig nga naman"){
                            echo "<p>Singer: $s->singer</p>";
                            break;
                        }
                    }
                ?>
                <p>
                Para bang unti-unti ko na lang binabago <br>
Ang sarili ko para sa 'yo (para sa 'yo, para sa 'yo)<br>
Hindi ko namalayan ang pag-ibig umaapaw<br>
Nalulunod na pala ako (pala ako, pala ako)<br>
Ooh, mahirap umalis lalo't baliw na<br>
Kapag nagtatampo sa 'yo naaaliw mo pa 'ko<br>
Gan'to pala umibig matagal na panaho'y<br>
Nawawala 'pag niyayakap mo<br>
Tinamaan ng lintek, 'di ka man lang bumusina<br>
Busog ang puso ko parang naiwan sa kusina<br>
Gan'to pala umibig kahit 'di magkalapit<br>
Tumbok ang butas kahit pa ako'y nakapikit<br>
O, pag-ibig nga naman<br>
O, pag-ibig nga naman<br>
O, pag-ibig nga naman<br>
O, pag-ibig nga naman<br>
O, pag-ibig (o, pag-ibig, oh)<br>
Parang bang hindi ko maipinta<br>
Parang bang asin ako na may itong paminta<br>
Para kang panimpla<br>
Ginising mo 'yung puso natutulog na parang mantika<br>
At kahit na lumalamig ang panahon<br>
Ay 'di to nagbabago kung 'di nagbabaga<br>
O, halika ng makita, pwede makinig ka, woah<br>
Ikaw ang panggising kong parang kape (parang kape)<br>
Gusto ko pagsaing, pagkain ika'y katabi, yeah-ey<br>
Dami man nagsabi sa akin na mali 'to<br>
Ikaw ang sasalo kaya magpapahilo<br>
Hindi ko na din kailangan pa ng resibo<br>
O, pag-ibig kala ko ba dahan-dahan?<br>
Bakit ang resibo mo sa 'kin hindi pa handa<br>
Hindi pa 'ko kumain<br>
Walang kawala sa balon mong malalim<br>
Ligayang hatid ginawa mo sa akin<br>
Bakit gan'to? Akala ko wala ng himala<br>
Pag-ibig lang pala ang pupuno sa 'king banga<br>
Hindi ko namalayan na maigi nahuhulog na pala<br>
Tinamaan ng lintek, 'di ka man lang bumusina<br>
Busog ang puso ko parang naiwan sa kusina<br>
Gan'to pala umibig kahit 'di magkalapit<br>
Tumbok ang butas kahit pa ako'y nakapikit<br>
O, pag-ibig nga naman<br>
O, pag-ibig nga naman<br>
O, pag-ibig nga naman<br>
O, pag-ibig nga naman<br>
O, hindi ko maipaliwanag ang nararamdaman<br>
Kung pag-ibig talaga hindi ko na 'to papakawalan<br>
Kahit na dumami mang hadlang<br>
Pinupunan mo naman 'yung patlang<br>
'Wag mo na hanapin kung saan<br>
Ang pag-ibig nasa paligid, nasa paligid lang
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