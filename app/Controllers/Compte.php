<?php
namespace App\Controllers;
use App\Models\Db_model;
use CodeIgniter\Exceptions\PageNotFoundException;
class Compte extends BaseController
{
protected $model;

public function __construct()
{
    helper('form');
    $this->model = model(Db_model::class);
}
public function lister()
{
    $data['titre'] = "Liste de tous les comptes";
    $data['nb'] = $this->model->get_nb_compte();
    $data['logins'] = $this->model->get_all_compte();
    return view('templates/haut', $data)
     . view('menu_visiteur')
     . view('affichage_comptes')
     . view('templates/bas');
}


//....Code du constructeur et de la fonction membre lister() ici !
public function creer()
{

// L’utilisateur a validé le formulaire en cliquant sur le bouton
//if ($this->request->getMethod()=="post") //POUR VERSION < V4.5.0
if ($this->request->getMethod()=="POST") //POUR VERSION >= V4.5.0
{
if (! $this->validate([
        'pseudo' => 'required|max_length[255]|min_length[2]',
        'mdp' => 'required|max_length[255]|min_length[8]'
    ],
    [
        'pseudo' => [
            'required' => 'Veuillez entrer un pseudo pour le compte !',
        ],
        'mdp' => [
            'required' => 'Veuillez entrer un mot de passe !',
            'min_length' => 'Le mot de passe saisi est trop court !',
        ],
    ]))
{
// La validation du formulaire a échoué, retour au formulaire !
return view('templates/haut', ['titre' => 'Créer un compte'])
. view('compte/compte_creer')
. view('templates/bas');
}
// La validation du formulaire a réussi, traitement du formulaire
$recuperation = $this->validator->getValidated();
$this->model->set_compte($recuperation);
$data['le_compte']=$recuperation['pseudo'];
$data['le_message']="Nouveau nombre de comptes : ";
//Appel de la fonction créée dans le précédent tutoriel :
$data['le_total'] = $this->model->get_nb_compte();
return view('templates/haut', $data)
. view('compte/compte_succes')
. view('templates/bas');



}
// L’utilisateur veut afficher le formulaire pour créer un compte
return view('templates/haut', ['titre' => 'Créer un compte'])
. view('compte/compte_creer')
. view('templates/bas');
}




public function connecter()
{
$model = $this->model(Db_model::class); // A compléter ou commenter... (j'ai modifier la)
// L’utilisateur a validé le formulaire en cliquant sur le bouton
if ($this->request->getMethod()=="POST"){
if (! $this->validate([
'pseudo' => 'required',
'mdp' => 'required'
]))
{ // La validation du formulaire a échoué, retour au formulaire !
return view('templates/haut', ['titre' => 'Se connecter'])
. view('connexion/compte_connecter')
. view('templates/bas');
}
// La validation du formulaire a réussi, traitement du formulaire
$username=$this->request->getVar('pseudo');
$password=$this->request->getVar('mdp');
if ($model->connect_compte($username,$password)==true)
{
$session=session();
$session->set('user',$username);
return view('templates/haut')
. view('connexion/compte_accueil')
. view('templates/bas');
}
else
{ return view('templates/haut', ['titre' => 'Se connecter'])
. view('connexion/compte_connecter')
. view('templates/bas');
}
}
// L’utilisateur veut afficher le formulaire pour se connecter
return view('templates/haut', ['titre' => 'Se connecter'])
. view('connexion/compte_connecter')
. view('templates/bas');
}
}







