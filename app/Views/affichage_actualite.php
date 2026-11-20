<div class="container py-5">

    <!-- Titre de la page -->
    <div class="text-center mb-5">

        <h1 style="color: #59313f; font-family: Georgia, serif;">
            <?php echo $titre; ?>
        </h1>

        <div style="width: 70px; height: 3px; background-color: #d6b77a; margin: 15px auto;"></div>

    </div>

    <?php if (isset($news)) { ?>

        <div class="card shadow-sm border-0 mx-auto" style="max-width: 800px;">

            <div class="card-body p-4">

                <h2 class="card-title mb-4" style="color: #59313f;">
                    <?php echo $news->act_titre; ?>
                </h2>

                <p class="text-muted mb-3">
                    <i class="fas fa-hashtag me-2" style="color: #b38b45;"></i>
                    Actualité n° <?php echo $news->act_id; ?>
                </p>

                <hr style="border-color: #d6b77a;">

                <div class="mb-4">
                    <h5 style="color: #59313f;">Description</h5>
                    <p><?php echo $news->act_texte; ?></p>
                </div>

                <div class="mb-3">
                    <i class="fas fa-calendar-alt me-2" style="color: #b38b45;"></i>
                    <strong>Date de publication :</strong>
                    <?php echo $news->act_date_publi; ?>
                </div>

                <div>
                    <i class="fas fa-user me-2" style="color: #b38b45;"></i>
                    <strong>Auteur :</strong>
                    <?php echo $news->cpt_mail; ?>
                </div>

            </div>

        </div>

    <?php } else { ?>

        <div class="alert text-center mx-auto shadow-sm"
             style="max-width: 800px; background-color: #fffaf3; border: 1px solid #d6b77a; color: #59313f;">

            <i class="fas fa-info-circle fa-2x mb-3" style="color: #b38b45;"></i>

            <h4>Pas d'actualité !</h4>

        </div>

    <?php } ?>

    <div class="text-center mt-4">

        <a href="<?php echo base_url(); ?>"
           class="btn text-white px-4"
           style="background-color: #59313f;">

            <i class="fas fa-home me-2"></i>
            Retour à l'accueil

        </a>

    </div>

</div>