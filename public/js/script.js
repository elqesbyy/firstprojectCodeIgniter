
// Fonction pour ajouter un livre
function addlivre() {
    const livreNameInput = document.getElementById('livreNameInput');
    const livreName = livreNameInput.value.trim();
    const alerte = document.getElementById('alerte');

    if (livreName === "") {
        alerte.textContent = "Le champs nom ne peut pas être vide.";
        return;
    } else {
        alerte.textContent = ""; // Efface le message d'alerte
    }

    const livreList = document.getElementById('livreList');
    
    // Crée un élément de liste pour le neveau livre
    const livreItem = document.createElement('li');
    livreItem.textContent = livreName;

    // Bouton de suppression pour chaque livre
    const deleteButton = document.createElement('button');
    deleteButton.textContent = "Supprimer";
    deleteButton.onclick = () => livreList.removeChild(livreItem);

    // Ajoute le bouton de suppression à l'élément de liste
    livreItem.appendChild(deleteButton);
    
    // Ajoute le livre à la liste
    livreList.appendChild(livreItem);

    // Réinitialise le champ d'entrée
    livreNameInput.value = "";
}