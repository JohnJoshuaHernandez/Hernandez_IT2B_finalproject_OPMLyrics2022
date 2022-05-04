<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>My Collection</title>
</head>
<body>

    <div class="container con">
        <div class="row u-full-width">
            <div class="nine columns">
                <a href="collection.php"><img src="../images/logo.png" alt="logo" width="50"></a>
            </div>
            <div class="three columns mar">
                <a href="mycollection.php">My OPM Collection</a>
            </div>
        </div>
        <br>
        <h1 class="margin">My 2022 OPM Collection</h1>

        <!-- startofphp -->
        <?php
            $titles = [
                "Iba by Zack Tabudlo feat. Moira Dela Torre" => "../lyrics/iba.php",
                "Ang wakas by Arthur Miguel feat. Trisha Macapagal" => "../lyrics/angwakas.php",
                "Hanggang dito nalang by Jojo Santor" => "../lyrics/hanggangditonalang.php",
                "Asan ka na ba by Zack Tabudlo" => "../lyrics/asankanaba.php",
                "Paliwanag by Yeng Constantino feat. Gloc 9" => "../lyrics/paliwanag.php",
                "Pag-ibig nga naman by Kunnns" => "../lyrics/pagibignganaman.php",
                "Rosas by Nica del Rosario feat. Gab Pangilinan" => "../lyrics/rosas.php",
                "Magkikita by The Juans" => "../lyrics/magkikita.php",
                "Misteryo by KD Estrada feat. Alexa Ilacad" => "../lyrics/misteryo.php",
                "Lambing by Mathaios" => "../lyrics/lambing.php",
                "Huling mensahe by Bandang Lapis" => "../lyrics/hulingmensahe.php",
                "Pagsamo by Arthur Nery" => "../lyrics/pagsamo.php",
                "Di na mag-iisa by Nobita" => "../lyrics/dinamagiisa.php",
                "Ikaw lang by Nobita" => "../lyrics/ikawlang.php",
            ];

            $result = [];

            foreach(array_keys($titles) as $t){
                array_push($result, $t);
            }

            foreach($result as $r){
                echo "
                    <div class='row margin'>
                        <div class='twelve columns'>
                            <a class='result' href='$titles[$r]'><h5>$r</h5></a>
                        </div>
                    </div>
                ";
            }
        ?>
        <!-- endofphp -->
        <div class="row footer">
            <div class="twelve columns center">
                <p>Copyright © 2022</p>
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