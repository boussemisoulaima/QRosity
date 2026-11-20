<?php
namespace App\Controllers;

use App\Models\Db_model;

class Oeuvre extends BaseController
{
    public function afficher()
    {
        $model = model(Db_model::class);

        $data['titre'] = 'Galerie des œuvres';
        $data['oeuvres'] = $model->get_all_oeuvres();

        return view('templates/haut', $data)
             . view('affichage_galerie')
             . view('templates/bas');
    }

    public function detail($code)
    {
        $model = model(Db_model::class);

        $data['titre'] = 'Détail de l’œuvre';
        $data['oeuvre'] = $model->get_oeuvre($code);

        return view('templates/haut', $data)
            . view('affichage_detail')
            . view('templates/bas');
    }

}
