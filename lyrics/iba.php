<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Iba | Lyrics</title>
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
                <h4>Iba</h4>
                <?php
                    $file = simplexml_load_file('../Hernandez_IT2B_OPMLyrics2022.xml');
                    foreach($file->song as $s){
                        if($s->title == "Iba"){
                            echo "<p>Singer: $s->singer</p>";
                            break;
                        }
                    }
                ?>
                <p>
                Na-na-na, hey
La, hey<br>
Uh-uh<br>
<br>
Hindi ko ba nasabi sa'yo mga kailangan kong itago?<br>
Nung panahon na lagi kong nakikita na iba ngiti mo<br>
Nahulog ka na ba sa iba, naghihintay na ba 'ko sa wala?<br>
Wala naman palang tumatalab sa ginawa ko para sa'ting dalawa<br>
Alam ko na hindi na tayo, pero ba't pinapamukha mo?<br>
'Di pa ba sapat lahat ng ginawa ko?<br>
May kulang ba sa'kin o sa'yo?<br>
May pakiramdam din naman ako<br>
'Wag ka naman parang gago<br>
Ako pa lumalabas na masama<br>
Minahal naman kita ng buong-buo<br>
<br>
Alam ko namang, alam ko namang<br>
Hindi ako ang hanap mo na, ang hanap mo na<br>
'Wag mo naman patagalin pa, patagalin pa<br>
Kung wala namang nangyayari na, nangyayari na<br>
Nagmumukha na lang akong iba<br>
Sa dapat mundo nating dalawa<br>
Sa'n na nga ba tayo pupunta?<br>
Tinadhana naman pero naghahanap ka ng iba<br>
<br>
Ba-ba-ba ng iba (Ng iba)<br>
Ba-ba-ba ng iba (Ng iba)<br>
Ba-ba-ba ng iba (Ng iba)<br>
Ba 'di ko alam ba't naghanap ng iba?<br>
Ba-ba-ba ng iba<br>
Ba-ba-ba ng iba (Ng iba)<br>
Bakit ba, bakit ba naghanap pa ng iba?<br>
<br>
Binalikan ko ang mga litrato, panahon na masaya pa tayo<br>
Hinahanap ko mga ngiti mo (Mukha namang totoo)<br>
Pero ba't bigla kang nagbago?<br>
Nawala 'yung kinang sa mga mata mo<br>
'Di naman siguro peke lahat ng ito<br>
Pero bakit ganito?<br>
<br>
Nawawala na ata 'ko sa sarili<br>
Binigay ko ang lahat para sa pag-ibig<br>
Hindi ko na alam ang aking gagawin (Gagawin)<br>
Sinira mo na 'ko sa iba<br>
Ako na 'yung nagmumukhang masama<br>
Pero ba't andito ako nagdurusa?<br>
<br>
Alam ko namang, alam ko namang<br>
Hindi ako ang hanap mo na, ang hanap mo na<br>
'Wag mo naman patagalin pa, patagalin pa<br>
Kung wala namang nangyayari na, nangyayari na (Ayoko na, ayoko na)<br>
Nagmumukha na lang akong iba<br>
Sa dapat mundo nating dalawa<br>
Sa'n na nga ba tayo pupunta? (Sa'n na pupunta?)<br>
Tinadhana naman pero naghahanap ka ng iba<br>
<br>
Ba-ba-ba ng iba (Ng iba)<br>
Ba-ba-ba ng iba (Ng iba)<br>
Ba-ba-ba ng iba (Ng iba)<br>
Nagmumukha na lang akong iba<br>
Sa dapat mundo nating dalawa (Sa dapat mundo nating dalawa)<br>
Ano ba ang nangyari na? (Parang gago lang 'di ba)<br>
(Tinadhana naman pero naghahanap ka ng iba)<br>
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