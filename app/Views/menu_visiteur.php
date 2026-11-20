<!-- Menu de navigation -->
<nav class="navbar navbar-expand-lg shadow-sm"
     style="background-color: #fffaf3; border-bottom: 2px solid #d6b77a;">

    <div class="container py-2">

        <!-- Bouton pour téléphone -->
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuNavigation"
                aria-controls="menuNavigation"
                aria-expanded="false"
                aria-label="Ouvrir le menu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Liens du menu -->
        <div class="collapse navbar-collapse justify-content-center"
             id="menuNavigation">

            <ul class="navbar-nav gap-lg-3 text-center">

                <li class="nav-item">
                    <a class="nav-link menu-lien" href="<?php echo base_url();?>">
                        Accueil
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-lien" href="<?php echo base_url();?>index.php/statistique/afficher">
                        Statistique
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-lien" href="<?php echo base_url();?>index.php/compte/lister">
                        Comptes
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-lien" href="<?php echo base_url();?>index.php/actualite/afficher/1">
                        Actualité
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-lien" href="<?php echo base_url();?>index.php/livredor/afficher">
                        Livre d'or
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-lien" href="<?php echo base_url();?>index.php/oeuvre/afficher">
                        Galerie des œuvres
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-lien" href="<?= site_url('compte/creer') ?>">
                        Créer un compte
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>

<!-- Style du menu -->
<style>
    .menu-lien {
        color: #59313f !important;
        font-weight: 600;
        font-size: 14px;
        letter-spacing: 1px;
        padding: 12px 15px !important;
        transition: all 0.3s ease;
    }

    .menu-lien:hover {
        color: #b38b45 !important;
        background-color: #f3eadc;
        border-radius: 6px;
    }

    .navbar-toggler {
        border-color: #59313f;
    }

    .navbar-toggler:focus {
        box-shadow: 0 0 0 0.15rem rgba(89, 49, 63, 0.25);
    }
</style>