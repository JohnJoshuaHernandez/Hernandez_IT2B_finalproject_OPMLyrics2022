<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Paliwanag | Lyrics</title>
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
                <h4>Paliwanag</h4>
                <?php
                    $file = simplexml_load_file('../Hernandez_IT2B_OPMLyrics2022.xml');
                    foreach($file->song as $s){
                        if($s->title == "Paliwanag"){
                            echo "<p>Singer: $s->singer</p>";
                            break;
                        }
                    }
                ?>
                <p>Punong-puno ka ng pag-asa <br>
Lunok lang kahit na 'di mo alam ang lasa<br>
Na para kang pinahawak ng dinamita<br>
Magsisindi ng mitsa ay sila, ah-ah<br>
Bakit kaya hinahayaan mo na<br>
Nakawin ang mga pinaghirapan para<br>
Sa'yong mga mahal sa buhay walang ganang<br>
Umangal kasi gano'n talaga<br>
Ang paliwanag sa'min<br>
<br>
Nung unang panahon<br>
Nagpaabuso na tayo sa Kastila<br>
Nilapastangan ng mga Hapon<br>
Ating kababaihan ay inalila<br>
Bakit 'di pa tayo natuto dun?<br>
Lumipat lang sa mga mukhang manika<br>
Mga dura nila nilululon<br>
Habang sumisigaw ng pagkadakila<br>
Kailan kaya kita makikita<br>
Na kay saya at tunay na malaya, ah<br>
'Di ko gusto na iwan ka lang dito, pero<br>
<br>
Punong-puno ka ng pag-asa<br>
Lunok lang kahit na 'di mo alam ang lasa<br>
Na para kang pinahawak ng dinamita<br>
Magsisindi ng mitsa ay sila, ah-ah<br>
Bakit kaya hinahayaan mo na<br>
Nakawin ang mga pinaghirapan para<br>
Sa'yong mga mahal sa buhay walang ganang<br>
Umangal kasi gano'n talaga<br>
Ang paliwanag sa'min<br>
<br>
Kay dami nang mga santong nangako<br>
Pero kabaong lang ang siyang kinahantungan<br>
Nailibing ng lumaon lalo na't may mga taong<br>
Parang manok kung manabong<br>
Sadyang makukulit, kukulit, ulitin maitapon lang ang tama<br>
Awa, nakakasawa<br>
Para kang naiwan ng mag-isa sa lawa<br>
Hawak ang lamang habang tawa ng tawa<br>
Talo ka habang sila'y dama ng dama<br>
'Di na ba tayo matututo<br>
Ilan pa ba ang dapat na ipakong Kristo<br>
Ng mga taga bantay na kunwari'y listo?<br>
Harapan ang tanggi harap-harapang bisto<br>
Is-is ka ng is-is, nipis ng panipis<br>
Inis kakatiis sa ulam na panis<br>
Bilis, tama na please<br>
Mintis ka ng mintis<br>
Bigkis sa'king paa't kamay 'di ko maalis<br>
<br>
Sabihin mo darating ba ang araw na 'di ka takot<br>
Iwanan ang mga mahal mo?<br>
Sa bahay na hindi sila mababasa<br>
Tuwing malakas ang bagyo<br>
Darating ba ang araw na 'di kailangang itago ang mga yapak mo?<br>
Kailangang lumayo, yumuko, magpasawalang-kibo<br>
'Pag tinatanong ang karapatan mo<br>
<br>
Punong-puno ka ng pag-asa<br>
Lunok lang kahit na 'di mo alam ang lasa<br>
Na para kang pinahawak ng dinamita<br>
Magsisindi ng mitsa ay sila, ah-ah<br>
Bakit kaya hinahayaan mo na<br>
Nakawin ang mga pinaghirapan para<br>
Sa'yong mga mahal sa buhay walang ganang<br>
Umangal kasi gano'n talaga<br>
<br>
Sabihin mo darating ba ang araw na 'di ka takot<br>
Iwanan ang mga mahal mo?<br>
Sa bahay na hindi sila mababasa<br>
Tuwing malakas ang bagyo<br>
Darating ba ang araw na 'di kailangang itago ang mga yapak mo?<br>
Kailangang lumayo, yumuko, magpasawalang-kibo<br>
'Pag tinatanong ang karapatan mo<br>
<br>
Punong-puno ka ng pag-asa<br>
Lunok lang kahit na 'di mo alam ang lasa<br>
Na para kang pinahawak ng dinamita<br>
Magsisindi ng mitsa ay sila, ah-ah<br>
Bakit kaya hinahayaan mo na<br>
Nakawin ang mga pinaghirapan para<br>
Sa'yong mga mahal sa buhay walang ganang<br>
Umangal kasi gano'n talaga<br>
Ang paliwanag sa'min</p>
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