<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'Inventaire</title>
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
}

/* Container Styles */
.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border: 1px solid #e0e0e0;
}

/* Header */
h1 {
    font-size: 2rem;
    color: #333333;
    text-align: center;
    margin-bottom: 20px;
}

/* Form Styles */
form {
    margin-top: 20px;
}

/* Form Row Styles */
.form-row {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
}

/* Form Controls */
input[type="text"], 
input[type="number"] {
    padding: 10px;
    border: 1px solid #cccccc;
    border-radius: 5px;
    font-size: 1rem;
    width: 100%;
}

/* Button Styles */
button {
    display: inline-block;
    font-size: 1rem;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button.btn-secondary {
    background-color: #6c757d;
    color: #ffffff;
}

button.btn-secondary:hover {
    background-color: #5a6268;
}

button.btn-primary {
    background-color: #007bff;
    color: #ffffff;
}

button.btn-primary:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    .form-row {
        flex-direction: column;
    }

    button {
        width: 100%;
        margin-top: 10px;
    }
}

    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Gestion d'Inventaire</h1>
        <form method="POST" action="store">
            <div id="product-list">
                <div class="product-item mb-3">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="nom" placeholder="Nom du produit" required>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" name="quantite" placeholder="Quantité" required min="0">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" name="prix" placeholder="Prix Unitaire" required step="0.01">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-secondary" action="store" >Ajouter un produit</button>
            <br><br>
            <a href="<?= base_url('/invantaire'); ?>" class="btn btn-primary">soumettre l'invantaire</a>
            </form>
    </div>
</body>
</html>