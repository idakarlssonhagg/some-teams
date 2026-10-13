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
    <link href="https://fonts.googleapis.com/css2?family=Esteban&family=Fjalla+One&display=swap" rel="stylesheet">

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
                <input
                type="checkbox"
                id="card-<?= htmlspecialchars($name) ?>"
                class="card-toggle"
                >

                <div class="team-card-inner">

                <!-- Front of the card -->
                <div class="team-front">

                    <!-- Safely handles special characters -->
                    <h2><?= htmlspecialchars($name) ?></h2>
                    
                    <!--Includes special caracters-->
                    <img
                        alt="<?= htmlspecialchars($name) ?> logo"
                        src="<?= htmlspecialchars($team['logo_uefa']) ?>"
                    >
                    
                <label for="card-<?= htmlspecialchars($name) ?>"> 
                    Click to read more!
                </label>

            </div>

            <!--Back of the card -->
            <div class="team-back"> 

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
<footer>
    <p>&copy; 2026 Women's Europa Cup</p>
    <p>Created as a web development school project.</p>
    <a href="index.php">Back to top</a>
</footer>