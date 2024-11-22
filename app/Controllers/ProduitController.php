<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Produit;

class ProduitController extends BaseController
{
    public function index()
    {
        return view('produitform');
    }

    public function store(){

        $produits = new Produit();
        $totalStock = 0;
        $stockStatu = "";
        $totalQuantite = 0;
        

        $nom = $this->request->getPost('nom');
        $quantite = $this->request->getPost('quantite');
        $prix = $this->request->getPost('prix');




        // Calcul de la valeur du stock pour ce produit
        $stockValue = $quantite * $prix;
        $totalStock += $stockValue;
        $totalQuantite += $quantite;
        

    }
    public function invantaire(){
        return view('invantaire');

    }
}
