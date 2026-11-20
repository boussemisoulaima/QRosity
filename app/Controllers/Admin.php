<?php
namespace App\Controllers;

class Admin extends BaseController
{
    public function afficher()
    {
        return view('templates/haut_admin')
             . view('affichage_admin')
             . view('templates/bas_admin');
    }
}
