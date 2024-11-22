<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'inscription</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Confirmation d'inscription</h2>
        <table>
            <tr>
                <th>Nom</th>
                <td id="nom"> <?= esc($nom) ?></td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td id="prenom"><?= esc($prenom) ?></td>
            </tr>
            <tr>
                <th>CINE</th>
                <td id="cine"><?= esc($cine) ?></td>
            </tr>
            <tr>
                <th>Date de naissance</th>
                <td id="dateNaissance"> <?= esc($dateNaissance) ?></td>
            </tr>
            <tr>
                <th>Code Massar</th>
                <td id="codeMassar"><?= esc($codeMassar) ?></td>
            </tr>
            <tr>
                <th>Filière du BAC</th>
                <td id="bacFiliere"> <?= esc($bacFiliere) ?></td>
            </tr>
            <tr>
                <th>Note</th>
                <td id="note"><?= esc($note) ?></td>
            </tr>
            <tr>
                <th>Filière de la licence</th>
                <td id="licenceFiliere"><?= esc($licenceFiliere) ?></td>
            </tr>
            <!--
            <tr>
                <th>photo</th>
                <td id="photo"> <?= esc($photo) ?> </td>
            </tr>
    -->
        </table>

        <br>
        <button >Valider</button>
        <button >Modifier</button>
    </div>

  
   
</body>
</html>
