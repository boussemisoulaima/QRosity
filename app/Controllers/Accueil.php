<?php
namespace App\Controllers;

use App\Models\Db_model;
use CodeIgniter\Exceptions\PageNotFoundException;

class Accueil extends BaseController
{
public function afficher()
{
    $model = model(Db_model::class);
    $data['actualites'] = $model->get_all_actualite();
    $data['expo'] = $model->get_presentation();

    return view('templates/haut', $data)
         . view('menu_visiteur')
         . view('affichage_accueil', $data)
         . view('templates/bas', $data);
}
}
?>
