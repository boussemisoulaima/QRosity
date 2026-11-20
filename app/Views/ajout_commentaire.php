<style>
    .formulaire-livre {
        max-width: 700px;
        margin: 50px auto;
        background-color: #fffaf3;
        border: 1px solid #e2d3b5;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(43, 23, 32, 0.15);
        overflow: hidden;
    }

    .formulaire-entete {
        background: linear-gradient(135deg, #2b1720, #59313f);
        color: white;
        text-align: center;
        padding: 30px 20px;
        border-bottom: 3px solid #d6b77a;
    }

    .formulaire-entete h2 {
        font-family: Georgia, serif;
        color: #d6b77a;
        font-size: 27px;
    }

    .formulaire-entete p {
        color: #e8dce0;
        margin-bottom: 0;
    }

    .formulaire-corps {
        padding: 35px;
    }

    .formulaire-corps .form-label {
        color: #59313f;
        font-weight: 600;
    }

    .formulaire-corps .form-control {
        border: 1px solid #d9c9a3;
        border-radius: 7px;
        padding: 11px;
        background-color: white;
    }

    .formulaire-corps .form-control:focus {
        border-color: #b38b45;
        box-shadow: 0 0 0 0.2rem rgba(179, 139, 69, 0.15);
    }

    .bouton-ajouter {
        background-color: #59313f;
        color: white;
        border: 1px solid #d6b77a;
        border-radius: 30px;
        padding: 13px;
        font-weight: 600;
        transition: 0.3s;
    }

    .bouton-ajouter:hover {
        background-color: #b38b45;
        color: white;
    }

    .erreur-formulaire {
        color: #b02a37;
        font-size: 14px;
        margin-top: 5px;
    }
</style>

<div class="container">

    <div class="formulaire-livre">

        <div class="formulaire-entete">

            <h2>Écrivez dans notre livre d'or</h2>

            <p>Partagez avec nous vos impressions sur l'exposition.</p>

            <div style="color:#d6b77a;font-size:25px;margin-top:10px;">
                ❦
            </div>

        </div>

        <div class="formulaire-corps">

            <?= session()->getFlashdata('error') ?>

            <?php if (isset($message)) { ?>
                <div class="alert alert-info">
                    <?= esc($message) ?>
                </div>
            <?php } ?>

            <?php echo form_open('/livredor/ajouter'); ?>

            <?= csrf_field() ?>

            <div class="mb-3">
                <label for="matricule" class="form-label">
                    Matricule du ticket
                </label>

                <input type="text" class="form-control"
                       id="matricule" name="matricule">

                <div class="erreur-formulaire">
                    <?= validation_show_error('matricule') ?>
                </div>
            </div>

            <div class="mb-3">
                <label for="mdp" class="form-label">
                    Mot de passe
                </label>

                <input type="password" class="form-control"
                       id="mdp" name="mdp">

                <div class="erreur-formulaire">
                    <?= validation_show_error('mdp') ?>
                </div>
            </div>

            <div class="mb-3">
                <label for="commentaire" class="form-label">
                    Votre commentaire
                </label>

                <textarea class="form-control"
                          id="commentaire" name="commentaire"
                          rows="5"
                          placeholder="Racontez-nous votre expérience..."></textarea>

                <div class="erreur-formulaire">
                    <?= validation_show_error('commentaire') ?>
                </div>
            </div>

            <hr style="border-color:#d6b77a;">

            <h5 class="mb-3" style="color:#59313f;">
                Vos coordonnées
            </h5>

            <div class="mb-3">
                <label for="mail" class="form-label">
                    Adresse e-mail
                </label>

                <input type="email" class="form-control"
                       id="mail" name="mail">

                <div class="erreur-formulaire">
                    <?= validation_show_error('mail') ?>
                </div>
            </div>

            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>

                <input type="text" class="form-control"
                       id="nom" name="nom">

                <div class="erreur-formulaire">
                    <?= validation_show_error('nom') ?>
                </div>
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>

                <input type="text" class="form-control"
                       id="prenom" name="prenom">

                <div class="erreur-formulaire">
                    <?= validation_show_error('prenom') ?>
                </div>
            </div>

            <div class="mb-4">
                <label for="dep" class="form-label">
                    Département
                </label>

                <input type="text" class="form-control"
                       id="dep" name="dep">

                <div class="erreur-formulaire">
                    <?= validation_show_error('dep') ?>
                </div>
            </div>

            <div class="d-grid">
                <input type="submit" name="submit"
                       class="btn bouton-ajouter btn-lg"
                       value="Ajouter mon commentaire">
            </div>

            </form>

        </div>
    </div>
</div>