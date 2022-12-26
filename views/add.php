<div class="container mx-auto">
<div class="row">


<form action="../gestion-employes-chaine/controllers/EmployesController.php" method="post" class="col-md-12 mx-auto" >
    nom : <input type="text" name="nom"><br>
    prenom : <input type="text" name="prenom"><br>
    sexe :<input type="radio" name="sexe" value="Male">Male
          <input type="radio" name="sexe" value="Female">Female<br>
    poste : <input type="text" name="poste"><br>
    statut : <input type="radio" name="statut" value="1"> Active
             <input type="radio" name="statut" value="0"> Non-Active <br>
    <button class="btn btn-outline-primary">Ajouter</button>
    <a href="../gestion-employes-chaine/?page=home" class="btn btn-outline-warning">home</a>
</form>
</div>
</div>
