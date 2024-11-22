<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Livres</title>
    <!-- <style>
        /* Styles de base */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 8px;
            width: 60%;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 8px 12px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .delete-btn {
            background-color: #dc3545;
            padding: 5px 10px;
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }
    </style> -->
</head>
<body>
    <div class="container">
        <h1>Gestion des Livres</h1>
        
        <form id="livreform">
            <input type="text" id="livreinput" placeholder="le titre du livre" required>
            <button type="submit">Ajouter</button>
        </form>
        <p id="alerte" style="color: red;"></p>


        <ul id="livreList"></ul>
    </div>

    <script>
        const livreform = document.getElementById('livreform');
        const livreinput = document.getElementById('livreinput');
        const livreList = document.getElementById('livreList');
    //     const alerte = document.getElementById('alerte');
    //     if (livreinput === "") {
    //     alerte.textContent = "Le champs nom ne peut pas être vide.";
    //     return;
    // } else {
    //     alerte.textContent = ""; // Efface le message d'alerte
    // }

        let books = [];

        // Fonction pour afficher la liste des livres
        function displayBooks() {
            // Vide la liste actuelle
            livreList.innerHTML = '';
            
            // Parcourt les livres et les ajoute dans la liste
            books.forEach((book, index) => {
                const li = document.createElement('li');
                li.textContent = book;

                // Bouton de suppression pour chaque livre
                const deleteButton = document.createElement('button');
                deleteButton.textContent = 'Supprimer';
                deleteButton.classList.add('delete-btn');
                deleteButton.onclick = () => removeBook(index);

                li.appendChild(deleteButton);
                livreList.appendChild(li);
            });
        }

        // Fonction pour ajouter un livre
        function addBook(event) {
            event.preventDefault(); // Empêche le rechargement de la page

            const bookTitle = livreinput.value.trim();
           
                books.push(bookTitle); // Ajoute le livre à la liste
              
                displayBooks(); // Met à jour l'affichage
           
        }

        // Fonction pour supprimer un livre
        function removeBook(index) {
            books.splice(index, 1); // Supprime le livre de la liste
            displayBooks(); // Met à jour l'affichage
        }

        // Ajoute un écouteur d'événement au formulaire pour l'ajout de livre
        livreform.addEventListener('submit', addBook);

        // Affiche la liste des livres au chargement de la page
        displayBooks();
    </script>
</body>
</html>