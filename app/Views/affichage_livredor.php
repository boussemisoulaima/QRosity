<!--
la partie bootstrap de livre d'or c'est géneré par l'IA (claude)

!-->
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">

<style> .livre-container {     max-width: 950px;     margin: 50px auto;     padding: 15px; }  .livre-couverture {     background: linear-gradient(135deg, #2b1720, #59313f);     color: #fffaf3;     text-align: center;     padding: 55px 20px;     border: 5px double #d6b77a;     border-radius: 8px 8px 0 0;     box-shadow: 0 8px 15px rgba(0,0,0,.2); }  .livre-couverture h1 {     font-family: 'Playfair Display', serif;     color: #d6b77a;     font-size: 42px;     margin: 20px 0; }  .livre-couverture p {     letter-spacing: 3px;     font-size: 13px; }  .livre-page {     background: #fdf6e3;     padding: 35px;     border: 1px solid #e0d2b4;     box-shadow: 0 8px 20px rgba(0,0,0,.12); }  .livre-page h3 {     text-align: center;     color: #59313f;     font-family: 'Playfair Display', serif;     margin-bottom: 30px; }  .commentaire {     padding: 20px 10px;     border-bottom: 1px dashed #c9b88c; }  .commentaire-texte {     font-family: 'Caveat', cursive;     font-size: 26px;     color: #26345b;     line-height: 1.5; }  .commentaire-signature {     font-family: 'Caveat', cursive;     font-size: 20px;     color: #7b3f1d;     text-align: right; }  .commentaire-date {     font-size: 14px;     color: #8a7a55; }  .livre-bas {     height: 18px;     background: #59313f;     border: 2px solid #d6b77a;     border-radius: 0 0 8px 8px; }  .bouton-livre {     background: #59313f;     color: white;     padding: 12px 25px;     border-radius: 30px;     text-decoration: none;     display: inline-block;     border: 1px solid #d6b77a; }  .bouton-livre:hover {     background: #b38b45;     color: white; }  @media(max-width: 600px) {     .livre-couverture h1 {         font-size: 30px;     }      .livre-page {         padding: 20px;     } } </style>

<div class="container py-4">

<div class="text-center mb-4">
    <a href="<?= site_url('livredor/ajouter') ?>" class="bouton-livre">
        <i class="fas fa-pen-fancy me-2"></i>
        Ajouter un commentaire
    </a>
</div>

<?php if (isset($message)) { ?>
    <div class="alert alert-warning text-center">
        <?= esc($message) ?>
    </div>
<?php } ?>

<div class="livre-container">

    <div class="livre-couverture">
        <p>LA MODE À TRAVERS LES DÉCENNIES</p>
        <div style="color:#d6b77a;font-size:30px;">❦</div>
        <h1>Livre d'or</h1>
        <p>VOS MOTS, NOS SOUVENIRS</p>
    </div>

    <div class="livre-page">

        

        <?php if (! empty($commentaires) && is_array($commentaires)) { ?>
            <h3>Les mots de nos visiteurs</h3>
            <?php foreach ($commentaires as $com) { ?>

                <div class="commentaire">

                    <p class="commentaire-texte">
                        « <?= esc($com["com_texte"]) ?> »
                    </p>

                    <div class="commentaire-signature">
                        — <?= esc($com["vis_mail"]) ?>
                    </div>

                    <div class="commentaire-date text-end">
                        <?= esc($com["com_date"]) ?>
                    </div>

                </div>

            <?php } ?>

        <?php } else { ?>

            <div class="text-center py-5">
                <p class="commentaire-texte">
                    Aucun commentaire pour le moment...
                </p>
                <p>Votre message sera le premier souvenir de ce livre.</p>
            </div>

        <?php } ?>

    </div>

    <div class="livre-bas"></div>

</div>

</div>