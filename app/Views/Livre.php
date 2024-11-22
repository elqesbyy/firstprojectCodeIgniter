<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des livres</title>
    <!-- <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        .container { max-width: 600px; margin: 20px auto; }
        ul { list-style-type: none; padding: 0; }
        li { display: flex; justify-content: space-between; align-items: center; margin: 5px 0; padding: 5px; border: 1px solid #ddd; border-radius: 4px; }
        button { background-color: #ddd; color: white; border: none; padding: 5px 10px; cursor: pointer; border-radius: 4px; }
        button:hover { background-color: #ccc; }
    </style> -->
    <script src="<?= base_url('public/js/script.js'); ?>"></script>
    </head>
<body>
<div class="container">
    <h1>Gestion des Livres</h1>
    <input type="text" id="livreNameInput" placeholder="Entrez le nom de le livre">
    <button onclick="addlivre()">Ajouter</button>
    
    <p id="alerte" style="color: red;"></p>
    
    <ul id="livreList"></ul>
</div>

   

</body>