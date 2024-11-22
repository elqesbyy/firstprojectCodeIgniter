<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    { 
        return view('inscription');
    }

/*    public function login(): string
    {
        // Use CodeIgniter's request object to get POST data
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Basic email and password check
        if ($email == 'user@site.com' && $password == 'p12345') {
            // Render aceuil view and pass the email to it
            return view('aceuil', ['email' => $email]);
        } else {
            // Return error message
            return "Les informations sont incorrectes";
        }

} 
*/

public function inscription():string
{
    // Validate that the request is a POST request
        // Retrieve form data using the request object
        $nom = $this->request->getPost('nom');
        $prenom = $this->request->getPost('prenom');
        $cine = $this->request->getPost('cine');
        $dateNaissance = $this->request->getPost('dateNaissance');
        $codeMassar = $this->request->getPost('codeMassar');
        $bacFiliere = $this->request->getPost('bacFiliere');
        $note = $this->request->getPost('note');
        $licenceFiliere = $this->request->getPost('licenceFiliere');

        // Handle the file upload  (photo)
        /*
        $photo = $this->request->getFile('photo');
        if ($photo->isValid() && !$photo->hasMoved()) {
            // Validate the file type and move the uploaded file
            if ($photo->getClientMimeType() == 'image/png') {
                // Define the path where the file will be stored
                $newName = $photo->getRandomName();
                $photo->move(WRITEPATH . 'uploads', $newName);

                // The file is successfully uploaded, and you can store the file path in the database or do other logic
                $filePath = WRITEPATH . 'uploads/' . $newName;
            } else {
                return "Le fichier doit être au format PNG.";
            }
        } else {
            return "Erreur lors de l'upload de la photo.";
        }
            */

        // Process the data (e.g., save to database or other logic)
        // Example: return a success message with the form data
        return view('confirmation', [
            'nom' => $nom,
            'prenom' => $prenom,
            'cine' => $cine,
            'dateNaissance' => $dateNaissance,
            'codeMassar' => $codeMassar,
            'bacFiliere' => $bacFiliere,
            'note' => $note,
            'licenceFiliere' => $licenceFiliere,
            /*
            'photo' => $filePath 
            */
        ]);
    } 

    public function validation()
     {
        $nom = $this->request->getPost('nom');
        $prenom = $this->request->getPost('prenom');
        $cine = $this->request->getPost('cine');
        $dateNaissance = $this->request->getPost('dateNaissance');
        $codeMassar = $this->request->getPost('codeMassar');
        $bacFiliere = $this->request->getPost('bacFiliere');
        $note = $this->request->getPost('note');
        $licenceFiliere = $this->request->getPost('licenceFiliere');
        
            return view('');
        }
}
   
  


