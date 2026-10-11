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
        <div class="logo">Womans Europa Cup</div>

        <nav>
            <a class="about" href="about.php">About</a>
        </nav>  
    </header>

    <main>

    <h1>This years football teams</h1>

    <!--Section for all football teams-->
    <section class="teams"> 

        <?php foreach ($teams as $name => $team): ?>

            <!--Class for each individual team--> 
            <div class="team-card"> 

                <div class="team-card-inner">

                <!-- Front of the card -->
                <div class="team-front">

                    <!--Includes special caracters-->
                    <img
                        src="<?= htmlspecialchars($team['logo_uefa']) ?>"
                        alt="<?= htmlspecialchars($name) ?> logo"
                    >
                    <!-- Safely handles special characters -->
                    <h2><?= htmlspecialchars($name) ?></h2>

                    <p>Click to read more!</p>

            </div>

            <!--Back of the card -->
            <div class="card-back"> 

                <h2><?= htmlspecialchars($name) ?></h2>

                <p>League: <?= htmlspecialchars($team['league']) ?></p>
                <p>City: <?= htmlspecialchars($team['city']) ?> </p>
                <p>UEFA ranking: <?= $team['uefa-coefficient-ranking'] ?></p>
                <p>League posistion: <?= $team['league-position'] ?></p>
                
                <!--Open the link in a new webbsite-->
                <a href="<?= htmlspecialchars ($team['url']) ?>" target="_blank" 
                    rel="noopener noreferrer"> <!-- Open the link in a new tab with extra security and privacy -->
                    
                    Visit their club website! <!--Don't need a <p> since it's a link-->
                </a>

                <!-- Link to return to the front of the card --> 
                <label for="card-<?= htmlspecialchars($name) ?>"
                    class="back-to-front"> 
                    Back to logo 
                </label>

            </div>
        </div>
    </div>

        <?php endforeach; ?>

    </section>


    </main>
</body>
<footer></footer>