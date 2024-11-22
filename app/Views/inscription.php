<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Bacheliers</title>
    <style> 
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .error {
            color: red;
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulaire d'inscription</h2>
        <form action="" method="POST">
           
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required><br><br>

            <label for="cine">CINE :</label>
            <input type="text" id="cine" name="cine" required><br><br>

            <label for="dateNaissance">Date de naissance :</label>
            <input type="date" id="dateNaissance" name="dateNaissance" required><br><br>

            <label for="codeMassar">Code Massar :</label>
            <input type="text" id="codeMassar" name="codeMassar" pattern="\d{10}" required><br><br>

            
            <label for="bacFiliere">Filière du BAC :</label>
            <select id="bacFiliere" name="bacFiliere" required>
                <option value="">Sélectionnez votre filière</option>
                <option value="SM">Sciences Mathématiques (SM)</option>
                <option value="PC">Physique Chimie (PC)</option>
                <option value="SVT">Sciences de la Vie et de la Terre (SVT)</option>
                <option value="TGC">Techniques Gestion Comptable (TGC)</option>
               
            </select><br><br>

            
            <label for="note">Note du BAC :</label>
            <input type="number" id="note" name="note" min="10" max="20" required><br><br>

            
            <label for="photo">Photo (PNG) :</label>
            <input type="file" id="photo" name="photo" accept=".png" required><br><br>

           
            <label for="licenceFiliere">Filière de la licence :</label>
            <select id="licenceFiliere" name="licenceFiliere" required>
                <option value="">Sélectionnez une filière</option>
                <option value="Biologie">Biologie</option>
                <option value="Chimie">Chimie</option>
                <option value="Géologie">Géologie</option>
                <option value="Informatique">Informatique</option>
                <option value="Physique">Physique</option>
                <option value="Mathématiques">Mathématiques</option>
            </select><br><br>

            <button type="submit">S'inscrire</button>
        </form>
    </div>


</body>
</html>
