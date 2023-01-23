<?php
if (isset($_POST['add'])) {
    $data = new EmployesController();
    $newEmploye = $data->ajouterEmploye();
}
?>

<div class="container">
    <div class="card bg-light">
        <a href="<?php echo base?>home" class=""><i class="bi bi-house"></i></a>
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Ajouter un Employe</h4>
            <form method="post">
                <div class="form-group input-group">
                    <input name="nom" class="form-control" placeholder="Non" type="text">
                </div>
                <div class="form-group input-group">
                    <input name="prenom" class="form-control" placeholder="Prénom" type="text">
                </div>
                <div class="form-group input-group">
                    <input type="radio" name="sexe" value="Male">Male
                    <input type="radio" name="sexe" value="Female">Female
                </div>
                <div class="form-group input-group">
                    <input name="poste" class="form-control" placeholder="Poste" type="text">
                </div>
                <div class="form-group input-group">
                    <select class="form-control" name="statut">
                        <option selected=""> Sélectionner une statut</option>
                        <option value="1" class="bg-success">Active</option>
                        <option value="0"  class="bg-danger">Non-Ative</option>
                    </select>
                </div>
                <button name="add" class="btn btn-outline-primary m-auto">Ajouter</button>
            </form>
        </article>
    </div>
</div>
