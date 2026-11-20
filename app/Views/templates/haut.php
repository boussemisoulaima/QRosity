<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="Découvrez notre exposition sur l'histoire de la mode." />
    <meta name="author" content="" />

    <title>
        <?php if (isset($expo)) { echo $expo->pre_titre; } ?>
    </title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
          href="<?php echo base_url(); ?>bootstrap/assets/favicon.ico" />

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
            crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
          rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700"
          rel="stylesheet" />

    <!-- Bootstrap et thème Agency -->
    <link href="<?php echo base_url(); ?>bootstrap/css/styles.css"
          rel="stylesheet" />

    <!-- Personnalisation -->
    <style>
        body {
            font-family: 'Roboto Slab', serif;
            background-color: #f8f7f5;
            color: #333;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Montserrat', sans-serif;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>

</head>

<body id="page-top">

    <!-- En-tête de l'exposition -->
    <header class="text-center py-5"
            style="background: linear-gradient(135deg, #2b1720, #59313f); color: white;">

        <div class="container py-4">

            <p style="color: #d6b77a; letter-spacing: 5px; font-size: 13px; text-transform: uppercase;">
                Une exposition exceptionnelle
            </p>

            <div style="width: 70px; height: 2px; background-color: #d6b77a; margin: 20px auto;"></div>

            <h1 class="display-3 fw-bold mb-3"
                style="font-family: Georgia, serif; letter-spacing: 2px;">

                <?php if (isset($expo)) { echo $expo->pre_titre; } ?>

            </h1>

            <p class="fs-5 mb-4" style="color: #e8dce0;">

                <?php if (isset($expo)) { echo $expo->pre_description; } ?>

            </p>

            <div style="width: 70px; height: 2px; background-color: #d6b77a; margin: 20px auto;"></div>

            <p class="mb-0" style="color: #d6b77a; letter-spacing: 3px; font-size: 12px;">
                ÉLÉGANCE · CRÉATIVITÉ · HISTOIRE
            </p>

        </div>

    </header>