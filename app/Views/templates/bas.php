<!-- Footer -->
<footer class="text-white pt-5 pb-3" style="background: linear-gradient(135deg, #2b1720, #59313f);">

    <div class="container">

        <div class="row text-center text-md-start">

            <!-- Nom de l'exposition -->
            <div class="col-md-6 mb-4">
                

                <p style="color: #e8dce0;">
                    Découvrez l'histoire de la mode à travers les décennies.
                </p>
            </div>

            <!-- Coordonnées -->
            <div class="col-md-6 mb-4">
                

                <?php if (isset($expo)) { ?>

                    <p>
                        <i class="fas fa-location-dot me-2" style="color: #d6b77a;"></i>
                        <?php echo $expo->pre_rue; ?>
                    </p>

                    <p>
                        <i class="fas fa-city me-2" style="color: #d6b77a;"></i>
                        <?php echo $expo->pre_code_postal; ?>
                        <?php echo $expo->pre_ville; ?>
                    </p>

                    <p>
                        <i class="fas fa-phone me-2" style="color: #d6b77a;"></i>
                        <?php echo $expo->pre_telephone; ?>
                    </p>

                    <p>
                        <i class="fas fa-envelope me-2" style="color: #d6b77a;"></i>
                        <?php echo $expo->pre_mail; ?>
                    </p>

                <?php } ?>
            </div>

        </div>

        <hr style="border-color: #d6b77a;">

       

    </div>

</footer>

<!-- Bootstrap core JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Core theme JS -->
<script src="<?php echo base_url();?>bootstrap/js/scripts.js"></script>

</body>
</html>