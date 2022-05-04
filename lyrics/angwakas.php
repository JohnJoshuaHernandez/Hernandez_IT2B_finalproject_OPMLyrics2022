<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Ang Wakas | Lyrics</title>
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
                <h4>Ang Wakas</h4>
                <?php
                    $file = simplexml_load_file('../Hernandez_IT2B_OPMLyrics2022.xml');
                    foreach($file->song as $s){
                        if($s->title == "Ang wakas"){
                            echo "<p>Singer: $s->singer</p>";
                            break;
                        }
                    }
                ?>
                <p>Mahirap ba'ng ipilit ang lumaban <br>
'Pag hindi na kaya?<br>
Saan na kukuha ng lakas?<br>
<br>
Ibuhos man lahat lahat<br>
Wala pa rin itong pag-asa<br>
Kung mag-isa kang lalaban<br>
<br>
Sa pag takbo ng ang oras<br>
Unti-unting kumupas<br>
Ang dating wagas<br>
Ay magwawakas<br>
<br>
Masisisi mo ba<br>
Kung ayaw na talaga<br>
Kung ang pag-ibig mo<br>
Tuluyang maglaho<br>
<br>
O' bat' nagbago bigla<br>
Mga titig ay nag-iba<br>
Ika'y Lumalayo<br>
Tadhana ba ito?<br>
<br>
Kapag damdamin na'ng nagsalita<br>
Wala ka nang magagawa<br>
Kundi sundin ito kahit ayaw<br>
<br>
Wala na ngang natirira<br>
Lahat lahat ay naglaho na<br>
Kontimg pilit pa'y masusugatan<br>
Bumitaw ka na<br>
<br>
Sa pag takbo ng ang oras<br>
Unti-unting kumupas<br>
Ang dating wagas<br>
Ay magwawakas?<br>
<br>
Masisisi mo ba<br>
Kung ayaw na talaga?<br>
Kung ang pag-ibig mo<br>
Tuluyang maglaho<br>
<br>
O' bat' nagbago bigla<br>
Mga titig ay nag-iba<br>
Ika'y lumalayo<br>
Tadhana ba ito?<br>
<br>
Tayo'y nagkamali<br>
Tayo ay nasugatan<br>
Maling galaw<br>
Lahat ay sasabit<br>
<br>
Ito na ba'ng huli<br>
Tayo'y magpapaalam<br>
Na sa ating nakaraan<br>
At bibitawan<br>
<br>
Masisisi mo ba<br>
Kung ayaw na talaga<br>
Kung ang pag-ibig mo<br>
Tuluyang maglaho<br>
<br>
Masisisi mo ba<br>
Kung ayaw na talaga<br>
Kung ang pag-ibig mo<br>
Tuluyang maglaho<br>
<br>
O' bat' nagbago bigla<br>
Mga titig ay nag-iba<br>
Ika'y pa palayo<br>
Tadhana ba ito?</p>
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