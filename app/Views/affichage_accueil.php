<div class="container py-5">

    <!-- Compte à rebours du vernissage -->
    <?php if (isset($expo)) { ?>

        <div class="card shadow-sm mb-5 text-center"
             style="border: none; border-left: 5px solid #d6b77a; background-color: #fffaf3;">

            <div class="card-body py-4">
                <div class="d-flex justify-content-end mb-3">
                    <a href="<?= site_url('compte/creer') ?>"
                    class="btn"
                    style="background-color: #59313f; color: white; border: 1px solid #d6b77a; border-radius: 30px; padding: 10px 25px;">
                        Créer un compte
                    </a>
                </div>

                <h3 class="mb-3" style="color: #59313f; font-family: Georgia, serif;">
                    <i class="fas fa-calendar-alt me-2" style="color: #b38b45;"></i>
                    Le vernissage
                </h3>

                <?php if ($expo->jours_avant_vernissage > 0) { ?>

                    <p class="fs-4 mb-0" style="color: #59313f;">
                        Vernissage dans
                        <strong style="color: #b38b45;">
                            <?php echo $expo->jours_avant_vernissage; ?> jour(s) !
                        </strong>
                    </p>

                <?php } elseif ($expo->jours_avant_vernissage == 0) { ?>

                    <p class="fs-4 mb-0" style="color: #59313f;">
                        Le vernissage a lieu aujourd'hui !
                    </p>

                <?php } else { ?>

                    <p class="fs-4 mb-0" style="color: #59313f;">
                        Le vernissage a déjà eu lieu.
                    </p>

                <?php } ?>

                <div class="mt-3" style="color: #59313f;">
                    <p class="mb-1">
                        <i class="fas fa-calendar-check me-2" style="color: #b38b45;"></i>
                        Date de début :
                        <strong>
                            <?= date('d/m/Y', strtotime($expo->pre_date_debut)) ?>
                        </strong>
                    </p>

                    <p class="mb-0">
                        <i class="fas fa-calendar-times me-2" style="color: #b38b45;"></i>
                        Date de fin :
                        <strong>
                            <?= date('d/m/Y', strtotime($expo->pre_date_fin)) ?>
                        </strong>
                    </p>
                </div>
                

            </div>
        </div>

    <?php } ?>


    <!-- Actualités -->
    <div class="mb-4 text-center">

        <h2 style="color: #59313f; font-family: Georgia, serif;">
            <i class="fas fa-newspaper me-2" style="color: #b38b45;"></i>
            Les actualités
        </h2>

        <div style="width: 70px; height: 3px; background-color: #d6b77a; margin: 15px auto;"></div>

        <p class="text-muted">
            Retrouvez toutes les dernières nouvelles de notre exposition.
        </p>

    </div>


    <?php if (! empty($actualites) && is_array($actualites)) { ?>

        <div class="card shadow-sm border-0">

            <div class="card-body p-0">

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead style="background-color: #59313f; color: white;">

                            <tr>
                                <th class="py-3">Titre</th>
                                <th class="py-3">Texte</th>
                                <th class="py-3">Date de publication</th>
                                <th class="py-3">Auteur</th>
                                <th class="py-3 text-center">Détail</th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach ($actualites as $actu) { ?>

                                <tr>

                                    <td class="fw-bold" style="color: #59313f;">
                                        <?php echo $actu["act_titre"]; ?>
                                    </td>

                                    <td>
                                        <?php echo $actu["act_texte"]; ?>
                                    </td>

                                    <td>
                                        <?php echo $actu["act_date_publi"]; ?>
                                    </td>

                                    <td>
                                        <?php echo $actu["cpt_mail"]; ?>
                                    </td>

                                    <td class="text-center">

                                        <a class="btn btn-sm text-white"
                                           style="background-color: #59313f;"
                                           href="<?php echo base_url();?>index.php/actualite/afficher/<?php echo $actu["act_id"]; ?>">

                                            Voir le détail

                                        </a>

                                    </td>

                                </tr>

                            <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    <?php } else { ?>

        <div class="alert text-center shadow-sm py-4"
             style="background-color: #fffaf3; border: 1px solid #d6b77a; color: #59313f;">

            <i class="fas fa-info-circle fa-2x mb-3" style="color: #b38b45;"></i>

            <h4>Aucune actualité pour le moment !</h4>

            <p class="mb-0">
                Revenez bientôt pour découvrir nos prochaines actualités.
            </p>

        </div>

    <?php } ?>

</div>