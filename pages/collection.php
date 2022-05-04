<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Collection</title>
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

        <div class="row margin">
            <div class="two-third column" style="margin-top: 20%;">
                <h4>Search my OPM Collection</h4>
                <p>You can use the search bar below to search for your favorite OPM song.</p>
            </div>
        </div>

        <div class="row margin">
            <div class="two-third column">
                <form action="collection.php" method="POST">
                    <input type="text" placeholder="Search title/singer here" id="title" name="title" required>
                    <button class="button button-primary" name="search">Search</button>
                </form>
            </div>
        </div>

        <!-- startofphp -->
        <?php

            if($_SERVER["REQUEST_METHOD"] === "POST"){

                //load xml file
                $file = simplexml_load_file('../Hernandez_IT2B_OPMLyrics2022.xml');

                $title = strval($_POST["title"]);

                $result = [];

                foreach($file->song as $s){
                    if(str_contains(strtolower($s->title), strtolower($title))){
                        array_push($result, $s);
                    }
                }

                if(!empty($result)){
                    foreach($result as $r){
                        echo "
                            <div class='row margin'>
                                <div class='twelve columns'>
                                    <a class='result' href='$r->pagelink'><h5>$r->title</h5></a>
                                </div>
                            </div>
                        ";
                    }
                }else{
                    echo "
                        <div class='row margin'>
                            <div class='twelve columns'>
                                <p>No result found!</p>
                            </div>
                        </div>
                    ";
                }
            }
        ?>
        <!-- endofphp -->
        <div class="row footer" style="margin-top: 30%;">
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