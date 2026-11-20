<?php
namespace App\Controllers;

use App\Models\Db_model;

class Livredor extends BaseController
{
    protected $model;

    public function __construct()
    {
        helper('form');
        $this->model = model(Db_model::class);
    }

    public function afficher()
    {
        $data['commentaires'] = $this->model->get_livre_or();

        return view('templates/haut', $data)
            . view('menu_visiteur')
            . view('affichage_livredor', $data)
            . view('templates/bas');
    }

    public function ajouter()
    {
        if ($this->request->getMethod() == "POST")
        {
           if (! $this->validate([
                'matricule' => 'required',
                'mdp' => 'required',
                'commentaire' => 'required',
                'mail' => 'required|valid_email',
                'nom' => 'permit_empty|max_length[60]',
                'prenom' => 'permit_empty|max_length[60]',
                'dep' => 'permit_empty|max_length[3]'
            ],
            [
                'matricule' => [
                    'required' => 'Veuillez saisir le matricule !'
                ],
                'mdp' => [
                    'required' => 'Veuillez saisir le mot de passe !'
                ],
                'commentaire' => [
                    'required' => 'Veuillez saisir un commentaire !'
                ],
                'mail' => [
                    'required' => 'Veuillez saisir votre adresse e-mail !',
                    'valid_email' => 'Veuillez saisir une adresse e-mail valide !'
                ]
            ]))
{
    return view('templates/haut')
        . view('menu_visiteur')
        . view('ajout_commentaire')
        . view('templates/bas');
}

            
            $recuperation = $this->validator->getValidated();

            $resultat = $this->model->set_commentaire($recuperation);

            
           if ($resultat['message'] == 'Délai des 3 heures de visite dépassé')
            {
                $data['message'] = $resultat['message'];
                $data['commentaires'] = $this->model->get_livre_or();

                return view('templates/haut', $data)
                    . view('menu_visiteur')
                    . view('affichage_livredor', $data)
                    . view('templates/bas');
            }

            $data['message'] = $resultat['message'];
        }

        return view('templates/haut')
            . view('menu_visiteur')
            . view('ajout_commentaire', $data ?? [])
            . view('templates/bas');
    }
}