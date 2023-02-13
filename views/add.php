<?php
if (isset($_POST['add'])) {
    $data = new EmployesController();
    $newEmploye = $data->ajouterEmploye();
}
if (isset($_FILES['excel']['name'])) {
    $data = new EmployesController();
    $newEmploye = $data->ajouterExcel();
//    echo 'hi';
}
?>

<div class="container">
    <div class="card bg-light mt-2">
        <div>
            <a href="<?php echo base ?>home"
               class="btn btn-primary btn-lg mm-3 m-2"
               role="button" aria-disabled="true">
                <i class="bi bi-house bi--md">
                </i> Home</a>
        </div>

        <article class="card-body mx-auto " style="max-width: 400px;">
            <h4 class="card-title  text-center">Ajouter un employé</h4><br>
            <form method="post">
                <div class="form-group input-group">
                    <input name="nom" class="form-control" placeholder="Nom" type="text" required>
                </div>
                <br>
                <div class="form-group input-group">
                    <input name="prenom" class="form-control" placeholder="Prénom" type="text" required>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexe" value="Homme" id="sexeH" required>
                    <label class="form-check-label" for="sexeH">
                        Homme
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Femme" name="sexe" id="sexeF" required>
                    <label class="form-check-label" for="sexeF">
                        Femme
                    </label>
                </div>
                <br>
                <div class="form-group input-group">
                    <input name="poste" class="form-control" placeholder="Poste" type="text" required>
                </div>
                <br>
                <div class="form-group input-group">
                    <select class="form-control" name="statut" required>
                        <option selected disabled> Sélectionner une statut</option>
                        <option value="1" class="bg-success">Active</option>
                        <option value="0" class="bg-danger">Non-Ative</option>
                    </select>
                </div>
                <br>
                <button name="add" class="btn btn-outline-primary m-auto">Ajouter</button>
            </form>
            <hr>
            <h4 class="card-title mt-4 text-center">Ajouter multiples employés</h4><br>
            <form action="#" method="post" enctype="multipart/form-data">
                <input type="file" class="form-control form-control-sm" name="excel" required/><br>
                <input type="submit" value="Ajouter" class="btn btn-outline-primary m-auto" name="excelS"/>
            </form>
            <br>
        </article>
    </div>
</div>
