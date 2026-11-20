<?php
/*
    Nom : Soulaima Boussemi
    Projet : Qriosity – Application de gestion d'expositions
    Thème : La Mode à travers les décennies
    Date : 03/09/2026
*/

namespace App\Models;
use CodeIgniter\Model;

class Db_model extends Model
{
    protected $db;

    // Établit la connexion avec la base de données
    public function __construct()
    {
        $this->db = db_connect();
        // ou
        // $this->db = \Config\Database::connect();
    }

    // Récupère les adresses mail de tous les comptes
    public function get_all_compte()
    {
        $resultat = $this->db->query("SELECT cpt_mail FROM t_compte_cpt;");
        return $resultat->getResultArray();
    }

    // Récupère une actualité précise à partir de son numéro
    public function get_actualite($numero)
    {
        $requete = "SELECT act_id, act_titre, act_texte, act_date_publi, cpt_mail
                    FROM t_actualite_act
                    JOIN t_compte_cpt USING (cpt_id)
                    WHERE act_id=".$numero."
                    AND act_etat='A';";

        $resultat = $this->db->query($requete);
        return $resultat->getRow();
    }

    // Compte le nombre total de comptes
    public function get_nb_compte()
    {
        $requete = "SELECT COUNT(*) AS nb FROM t_compte_cpt;";
        $resultat = $this->db->query($requete);
        return $resultat->getRow();
    }

    // Récupère les 8 dernières actualités actives
    public function get_all_actualite()
    {
        $requete = "SELECT act_id,act_titre, act_texte, act_date_publi,cpt_mail FROM t_actualite_act join t_compte_cpt using (cpt_id) where act_etat='A' ORDER BY act_date_publi DESC
                    LIMIT 8;";
        $resultat = $this->db->query($requete);
        return $resultat->getResultArray();
    }

    // Récupère les informations de l'exposition et calcule les jours avant le vernissage
    public function get_presentation()
    {
        $requete = "SELECT pre_titre, pre_description, pre_date_debut, pre_date_fin, pre_date_ver,pre_rue, pre_code_postal, pre_ville, pre_telephone, pre_mail, pre_wifi,DATEDIFF(pre_date_ver, NOW()) AS jours_avant_vernissage FROM t_presentation_pre;";
        $resultat = $this->db->query($requete);
        return $resultat->getRow();
    }

    // Récupère les commentaires du livre d'or
    public function get_livre_or()
    {
        $requete = "SELECT com_texte, com_date, vis_mail
                    FROM t_commantaire_com
                    JOIN t_ticket_tic USING (tic_id)
                    JOIN t_visiteur_vis USING (vis_id)
                    WHERE com_etat = 'N'
                    ORDER BY com_date DESC;";
        $resultat = $this->db->query($requete);
        return $resultat->getResultArray();
    }

    // Crée un nouveau compte avec un mot de passe haché
    public function set_compte($saisie)
    {
        $login=$saisie['pseudo'];
        $mot_de_passe=$saisie['mdp'];
        $sql = "INSERT INTO t_compte_cpt VALUES(NULL,'".$login."',SHA2('".$mot_de_passe."',256));";
        return $this->db->query($sql);
    }

    // Ajoute un commentaire au livre d'or à l'aide d'une procédure stockée
    public function set_commentaire($saisie)
    {
        $requete = "CALL ajouter_commentaire(?, ?, ?, ?, ?, ?, ?)";

        $resultat = $this->db->query($requete, [
            $saisie['matricule'],
            $saisie['mdp'],
            $saisie['commentaire'],
            $saisie['mail'],
            $saisie['nom'],
            $saisie['prenom'],
            $saisie['dep']
        ]);

        return $resultat->getRowArray();
    }

    // Récupère toutes les œuvres avec leurs créateurs et leurs langues
    public function get_all_oeuvres()
    {
        $requete = "SELECT
                    ovr_id,
                    ovr_intitule,
                    ovr_code,
                    ovr_image,
                    GROUP_CONCAT(DISTINCT CONCAT(expo_prenom, ' ', expo_nom) SEPARATOR ', ') AS createurs,
                    GROUP_CONCAT(DISTINCT lng_nom SEPARATOR ', ') AS langues
                FROM t_oeuvre_ovr
                LEFT JOIN t_ouevre_collective_covr USING (ovr_id)
                LEFT JOIN t_exposant_expo USING (expo_id)
                LEFT JOIN t_traduction_tra USING (ovr_id)
                LEFT JOIN t_langue_lng USING (lng_id)
                GROUP BY ovr_id, ovr_intitule, ovr_code, ovr_image
                ORDER BY ovr_intitule;";

        $resultat = $this->db->query($requete);
        return $resultat->getResultArray();
    }

    // Récupère les détails d'une œuvre à partir de son code
    public function get_oeuvre($code)
    {
        $requete = "SELECT * FROM t_oeuvre_ovr WHERE ovr_code='".$code."';";
        $resultat = $this->db->query($requete);
        return $resultat->getRow();
    }


    // fonction pour la connection 
    public function connect_compte($u,$p)
    {
    $sql="SELECT cpt_login,cpt_mdp
    FROM t_compte_cpt
    WHERE cpt_login='".$u."'
    AND cpt_mdp='".$p."';";
    $resultat=$this->db->query($sql);
    if($resultat->getNumRows() > 0)
    {
    return true;
    }
    else
    {
    return false;
    }
}







}