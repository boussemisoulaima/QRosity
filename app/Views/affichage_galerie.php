<div class="container">

    <h2>Galerie des œuvres</h2>

    <?php if (! empty($oeuvres) && is_array($oeuvres)) { ?>

        <div class="row">

            <?php foreach ($oeuvres as $oeuvre) { ?>

                <div class="col-md-4 mb-4">

                    <div class="card">

                        <img src="<?php echo base_url(); ?>images/<?php echo $oeuvre['ovr_image']; ?>"
                             class="card-img-top" alt="Image de l'œuvre">

                        <div class="card-body">

                            <h5 class="card-title">
                                <?php echo $oeuvre['ovr_intitule']; ?>
                            </h5>

                            <p>
                                <strong>Créateur(s) :</strong>
                                <?php echo $oeuvre['createurs']; ?>
                            </p>

                            <p>
                                <strong>Langues :</strong>
                                <?php echo $oeuvre['langues']; ?>
                            </p>

                            <a href="<?php echo base_url(); ?>index.php/oeuvre/detail/<?php echo $oeuvre['ovr_code']; ?>">
                                Voir le détail
                            </a>

                        </div>

                    </div>

                </div>

            <?php } ?>

        </div>

    <?php } else { ?>

        <h3>Aucune œuvre pour l'instant !</h3>

    <?php } ?>

</div>
