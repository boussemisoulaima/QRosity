<div class="container py-5">

    <!-- Titre de la page -->
    <div class="text-center mb-5">

        <h1 style="color: #59313f; font-family: Georgia, serif;">
            <?php echo $titre; ?>
        </h1>

        <div style="width: 70px; height: 3px; background-color: #d6b77a; margin: 15px auto;"></div>

    </div>

    <!-- Nombre total de comptes -->
    <div class="card shadow-sm border-0 mx-auto mb-4"
         style="max-width: 500px; background-color: #fffaf3;">

        <div class="card-body text-center">

            <i class="fas fa-users fa-2x mb-3" style="color: #b38b45;"></i>

            <h4 style="color: #59313f;">
                Nombre total de comptes
            </h4>

            <p class="display-5 fw-bold mb-0" style="color: #59313f;">
                <?php echo $nb->nb; ?>
            </p>

        </div>

    </div>

    <!-- Liste des comptes -->
    <?php if (! empty($logins) && is_array($logins)) { ?>

        <div class="card shadow-sm border-0 mx-auto" style="max-width: 800px;">

            <div class="card-header text-white text-center"
                 style="background-color: #59313f;">

                <h4 class="mb-0">Liste des comptes</h4>

            </div>

            <div class="card-body">

                <?php foreach ($logins as $pseudos) { ?>

                    <div class="d-flex align-items-center p-3 mb-2 rounded"
                         style="background-color: #fffaf3;">

                        <i class="fas fa-user-circle fa-2x me-3"
                           style="color: #b38b45;"></i>

                        <span style="color: #59313f;">
                            <?php echo $pseudos["cpt_mail"]; ?>
                        </span>

                    </div>

                <?php } ?>

            </div>

        </div>

    <?php } else { ?>

        <div class="alert text-center mx-auto shadow-sm"
             style="max-width: 800px; background-color: #fffaf3; border: 1px solid #d6b77a; color: #59313f;">

            <i class="fas fa-info-circle fa-2x mb-3" style="color: #b38b45;"></i>

            <h4>Aucun compte pour le moment</h4>

        </div>

    <?php } ?>

</div>