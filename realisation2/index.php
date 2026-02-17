<?php
require_once 'fonctions.php';


// Charge le fichier JSON des consultations s’il existe, sinon initialise un tableau vide pour stocker les consultations
$file = "data/consultations.json";
$consultations = [];

if(file_exists($file)){
    $consultations = json_decode(file_get_contents($file), true);
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des consultations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php if(isset($_GET['success'])): ?>
    <p style="color:green;">Consultation ajoutée avec succès ✅</p>
<?php endif; ?>

<table border="1" cellpadding="5">
<tr> 
    <th>ID Patient</th>
    <th>Nom et Prenom</th>
    <th>Telephone</th>
    <th>Sexe</th>
    <th>Date consultation</th>
    <th>Age</th>
    <th>Température</th>
    <th>tension_sys</th>
    <th>tension_dia</th>
    <th>poids</th>
    <th>IMC</th>
    <th>Alertes</th>
</tr>



<?php foreach($consultations as $c): ?>
    
<tr>
    <td> <?= $c['id'] ?></td>
    <td><?= $c['patient']['nom']." ".$c['patient']['prenom'] ?></td>
    <td><?= $c['patient']['telephone'] ?></td>
    <td><?= $c['patient']['sexe'] ?></td>
    <td><?= $c['consultation']['date'] ?></td>
    <td><?= $c['patient']['age'] ?></td>
    <td><?= $c['consultation']['temperature'] ?> °C</td>
    <td><?= $c['consultation']['tension_sys'] ?> </td>
    <td><?= $c['consultation']['tension_dia'] ?></td>
    <td><?= $c['consultation']['poids'] ?></td>
    <td><?= round($c['consultation']['IMC'],2) ?></td>
    <td>
        <?= empty($c['consultation']['alertes']) 
            ? "Aucune" 
            : implode(", ", $c['consultation']['alertes']); ?>
    </td>
</tr>
<?php endforeach; ?>

</table>

<br>
<a href="form.php"> Ajouter une consultation</a>

</body>
</html>