<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<header>
    <h1>Calculateur de la moyenne scolaire</h1>
    <p>Bienvenue sur la plateforme de calcul de la moyenne</p>
</header>


<main>
<form action="traitment.php" method="post" >

    <h2>
        Informations personnelles
    </h2>

    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom">
<br>
<br>
    <label for="prenon"> Prenom :</label>
    <input type="text" id="prenom" name="prenom">
<br>
<br>
    <label for="Date_de_naissance"> Date de naissance :</label>
     <input type="Date" id="Date_de_naissance" name="date">

<br>
<br>
     <label for="lecole">Nom de l ecole :</label>
     <input type="text" id='lecloe' name='ecole' placeholder='Nom de l ecole...' >
<br>
<br>
     <label for="classe">classe :</label>
     <input type="text" id='classe' name='classe' placeholder='Nom de classe' >

<br>
<br>
    <label for="Nsalle">Numero de salle dexamen naional :</label>
    <input type="number" id='Nsalle' name='Nsalle' placeholder='Numero de salle dexamen naional...' >

<br>
<br>
     <h2>
        Calculer ta moyenne des cours 
     </h2>
     
    <h4>
        Quelle est ta filière ?
    </h4>

    <select name="filiere" id="select">
        <option value="" disabled selected> Filiere</option>
            <option value="pc">pc</option>
            <option value="math">math</option>
        <option value="svt">svt</option>
    </select>

    <h4>
        Saisir les notes de chaque matière :
    </h4>
     
    <h5>
        Math
    </h5>

    <label for="maths">note 1 :</label>
    <input type="number" id="maths" name="math1" min="0" max="20">

     <label for="maths">note 2 :</label>
    <input type="number" id="maths" name="math2" min="0" max="20">
    

<br>
<br>

        <h5>
            phizique 
        </h5>

        <label for="pc"> note 1 :</label>
        <input type="number"  id="pc" name="pc1"   min="0" max="20">

        <label for="pc"> note 2 :</label>
        <input type="number"  id="pc" name="pc2"   min="0" max="20">
<br>
<br>
        <h5>
            svt
        </h5>

        <label for="svt">note 1:</label>
        <input type="number" name="svt1" id="svt" min="0" max="20">

        <label for="svt">note 2:</label>
        <input type="number" name="svt2" id="svT" min="0" max="20">
        
<br>
<br>

        <h5>
            englais
        </h5>

        <label for="englai"> note 1 :</label>
        <input type="number" id="englai" name="englai1" min="0" max="20">

        <label for="englai"> note 2 :</label>
        <input type="number" id="englai" name="englai2" min="0" max="20">
        
<br>
<br>

        <h5>
            philosphie
        </h5>

        <label for="philo"> note 1 :</label>
        <input type="number" id="philo" name="philo1" min="0" max="20" >

        <label for="philo"> note 2 :</label>
        <input type="number" id="philo" name="philo2" min="0" max="20" >

<br>
<br>
        <h4>
            notes de l’examen régional
        </h4>

        
        <label for="rgl">  notes de l’examen régional : </label>
        <input type="number" name="regional" id="rgl" min="0" max="20">
        
 
<br>
<br>
        <h4>
            les notes de l’examen national
        </h4>

        <label for="ntl"> Saisir les notes de l’examen national</label>
        <input type="number" name='national' id='ntl' min="0" max="20">


<br>
<br>

      <button type="submit">submit</button>
      <button type="reset">reset</button>
      


 </form>

</main>

<footer>
    <p>© 2026 - Tous droits réservés</p>
</footer>

</body>