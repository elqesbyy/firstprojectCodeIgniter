<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TestController extends BaseController
{
    

    public function index(){

        return view('login');
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    }
    public function login()
    {
         // Load helper for form validation
         helper(['form']);

         // Get POST data and trim it
         $name = trim($this->request->getPost('name'));
         $email = trim($this->request->getPost('email'));
         $message = trim($this->request->getPost('message'));
 
         // Initialize errors array
         $errors = [];
 
         // Validation logic
         if (empty($name)) {
             $errors[] = "Le nom est requis.";
         }
 
         if (empty($email)) {
             $errors[] = "L'adresse e-mail est requise.";
         } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $errors[] = "L'adresse e-mail n'est pas valide.";
         }
 
         if (empty($message)) {
             $errors[] = "Le message est requis.";
         }
 

         // Check if there are errors
         if (empty($errors)) {
             // No errors, display success message
              // Format the data
             $data = "Nom: $name\nEmail: $email\nMessage: $message\n---\n";
             // Specify the file path
             $filePath = WRITEPATH . 'uploads/donnees.txt'; // WRITEPATH is a constant in CodeIgniter for writable directory
            // Write data to file
            if (file_put_contents($filePath, $data, FILE_APPEND | LOCK_EX) !== false) {
                        return view('success', ['name' => $name]);
                    } else {
                        // If an error occurs during file write, add an error message
                        $errors[] = "Erreur lors de l'enregistrement des informations.";
                        return view('login', ['errors' => $errors]);
                    }
         } else {
             // Errors present, reload form with error messages
             return view('login', ['errors' => $errors]);
         }
     
    }
    public function welcome(){

        return view('welcome');
    }
    

  
}
