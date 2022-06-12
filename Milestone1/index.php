<!--
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP,
che stampa direttamente i dischi in pagina:
al caricamento della pagina ci saranno tutti i dischi.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milestone1</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include_once __DIR__ . "/database.php"; ?>

    <!-- HEADER -->
    <header>
        <img src="img/logo-small.svg" alt="logo spotify">
    </header>
    <!-- /HEADER -->

    <!-- MAIN -->
    <main>
        <div class="container">
            <?php foreach ($database as $card) { ?>
                <div class="card">
                    <img src="<?php echo $card["poster"]; ?>" alt="">
                    <h2>
                        <?php
                            echo $card["title"];
                        ?>
                    </h2>
                    <h3>
                        <?php
                            echo $card["author"];
                        ?>
                    </h3>
                    <h4>
                        <?php
                            echo $card["year"];
                        ?>
                    </h4>
                </div>
            <?php } ?>
            <!-- <div class="card">
                
            </div> -->
        </div>
    </main>
    <!-- /MAIN -->


</body>

</html>