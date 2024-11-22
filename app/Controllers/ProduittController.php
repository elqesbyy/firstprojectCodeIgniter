<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Produit;


class ProduittController extends BaseController
{
  
    public function index()
    {
        return view('produitform');
    }
        public function store ()
        {
             //Validation des données du formulaire
            $validation = $this->validate([
                'nom' => 'required',
                'prix' => 'required',
                'quantite' => 'required',
               
            ]);
           
            if ($validation) {
                // Récupération des données du formulaire
                $nom = $this->request->getPost('nom');
                $prix = $this->request->getPost('prix');
                $quantite = $this->request->getPost('quantite');
                $total = 0;
        
                // Calcul de la disponibilité
                if ($quantite == 0) {
                    $disponibilite = 'rupture de stock';
                } elseif ($quantite >= 1 && $quantite <= 10) {
                    $disponibilite = 'faible stock';
                } else {
                    $disponibilite = 'en stock';
                }
        
                // Préparation des données pour insertion
                $data = [
                    'nom' => $nom,
                    'prix' => $prix,
                    'quantite' => $quantite,
                    'disponibilite' => $disponibilite,
                ];
                $total += $quantite;
    
                // Création du modèle et insertion dans la base de données
                $ProduitsModel = new Produit();
                $ProduitsModel->insert($data);
                $produits = $ProduitsModel->findAll();
    
                return view('invantaire', [
                    'produits' => $produits,'total' => $total
                ]);
                
                   }
        }
    
}
