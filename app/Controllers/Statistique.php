<?php
namespace App\Controllers;

class Statistique extends BaseController
{
    public function afficher(){
    return view('templates/haut')
     . view('menu_visiteur')
     . view('affichage_statistique')
     . view('templates/bas');
}

}
