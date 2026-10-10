<?php
include 'data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Womans Europa Cup</title>
    <link rel="stylesheet" href="style.css" />
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Esteban&display=swap" rel="stylesheet">

</head>

<body>

    <header>
        <nav>
            <a class="about" href="about.php">About</a>
        </nav>
        
        <div class="logo">Womans Europa Cup</div>
    </header>

    <main>

    <h1>This years football teams</h1>

    <!--Section for all football teams-->
    <section class="teams"> 

        <?php foreach ($teams as $name => $team): ?>

            <!--Class for each individual team--> 
            <div class="team"> 
                
                <h2><?= htmlspecialchars($name) ?></h2>
                
                <!--Makes the text in HTML safer-->
                <img
                    src="<?= htmlspecialchars($team['logo_uefa']) ?>"
                    alt="<?= htmlspecialchars($name) ?> logo"
                >

                <p>League: <?= htmlspecialchars($team['league']) ?></p>
                <p>City: <?= htmlspecialchars($team['city']) ?> </p>
                <p>UEFA ranking: <?= $team['uefa-coefficient-ranking'] ?></p>
                <p>League posistion: <?= $team['league-position'] ?></p>
                
                <!--Open the link in a new webbsite-->
                <a href="<?= htmlspecialchars ($team['url']) ?>" target="_blank" 
                    rel="noopener noreferrer"> <!-- Open the link in a new tab with extra security and privacy -->
                    
                    Visit their club website! <!--Don't need a <p> since it's a link-->
                </a>

            </div>

        <?php endforeach; ?>

    </section>


    </main>
</body>
<footer></footer>