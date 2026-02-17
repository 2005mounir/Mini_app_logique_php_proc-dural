

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>Ajouter une consultation médicale</h1>


<form action="traitment.php" method='POST'>

      <h2> Informations du patient</h2>


         <label for="nom">Nom :</label>
         <input type="text" id='nom' name='nom' placeholder='le nom...'>
<br>
<br>
         <label for="prenom">Prenom :</label>
         <input type="text" id='prenom' name='prenom' placeholder='le prenom...'>

<br>
<br>
        <label for="datenaissonce"> Date de naissance :</label>
        <input type="date" id='datenaissonce' name='datedenaissonce' placeholder='date de naissace'>
<br>
<br>

        <select name="select" id="select">
            <option value="" selected  disabled >Sexe</option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
        </select>

<br>
<br>
         <label for="Ntelephone"> Nemuro de telphone :</label>
         <input type="text" id='Ntelephone' name='Ntelephone' placeholder='Nemuro de telphone...'>


          <h2> Informations de la consultation</h2>

          <label for="Date_de_consultation">Date de consultation :</label>
          <input type="Date" id='Date_de_consultation' name='Dt_consultation' placeholder='Date_de_consultation..'>
<br>
<br>

          <label for="Temperature">Température (°C)</label>
          <input type="text" id='Temperature' name='temperature' placeholder='Temperature (°C)...'>

<br>
<br>

          <label for="tension">Tension artérielle :</label>
          <input type="text" id='tension'name="tension_sys" placeholder="Systolique">  <!-- La pression dans les artères lorsque le cœur se contracte (valeur maximale) -->
          <input type="text"  id= 'tension' name="tension_dia" placeholder="Diastolique" >   <!-- La pression dans les artères lorsque le cœur se relâche (valeur minimale) -->

<br>
<br>
           <label for="poids"> Poids (kg) :</label>
           <input type="text" step="0.1"  id='poids' name='poids' placholder='poids...'>

<br>
<br>

           <label for="taille"> Taille (m):</label>
           <input type="text" step='0.01' id='taille' name='taille' placeholder='taille...'>

<br>
<br>

             <label>Symptômes</label>
<br>
<br>

    <div class="checkbox-group">

            <label for="Fievre"> Fievre :</label>
            <input type="checkbox" id='Fievre' name='symptomes[]' value="Fièvre">
<br>
<br>

            <label for="Toux">Toux :</label>
            <input type="checkbox" id='Toux' name ='symptomes[]' value='Toux'>
<br>
<br>

             <label for="Fatigue">Fatigue :</label>
             <input type="checkbox" id='Fatigue' name='symptomes[]' value='Fatigue'>
<br>
<br>
            <label for="Douleur">Douleur :</label>
            <input type="checkbox" name="symptomes[]" value="Douleur">


     </div>
<br>
<br>


        <button type='submit'>SubmIt</button>
       



    </form>
    
</body>