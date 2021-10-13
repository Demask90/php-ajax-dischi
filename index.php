<?php 
include __DIR__ . '/utilities/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Ajax Dischi</title>
</head>
<body>
    <div id="root">
    <header class="header">
        <div class="logoImg">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Spotify_icon.png" alt="logo spotify">
        </div>
        <div class="selection">
            <select name="selectionGenre" id="selectionGenre">
                <option value="All">All</option>
                <option value="Rock">Rock</option>
                <option value="Pop">Pop</option>
                <option value="Jazz">Jazz</option>
                <option value="Metal">Metal</option>
            </select>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <?php
            foreach($musciBox as $song){
            ?>    
                <div class='card'>
                    <div class='cardImg'>
                        <img src=<?php echo $song['poster']?> alt='poster <?php $song['title']?>'>
                    </div>
                    <div class='cardInfo'>
                        <div class='cardTitle'><h3><?php echo strtoupper($song['title'])?></h3></div>
                        <div class='cardAuthor'>
                            <h4><?php echo$song['author']?></h4>
                            <h4><?php echo $song['year']?></h4>
                        </div>
                    </div>
                </div>
            <?php    
            }
            ?>
        </div>
    </main>
    </div>
    <script src="js/main.js"></script>
</body>
</html>