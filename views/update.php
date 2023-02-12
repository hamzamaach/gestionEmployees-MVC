<?php
if (isset($_POST['id'])) {
    $oldEmploye = new EmployesController();
    $employe = $oldEmploye->getOneEmploye();
} else {
    Redirect::to('home');
}
if (isset($_POST['update'])) {
    $oldEmploye = new EmployesController();
    $oldEmploye->updateEmploye();
}
?>

<div class="container">
    <div class="card bg-light">

        <div>
            <a href="<?php echo base ?>home"
               class="btn btn-primary btn-lg mm-3 "
               role="button" aria-disabled="true">
                <i class="bi bi-house bi--md">
                </i> Home</a>
        </div>
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Mettre à jour</h4>
            <form method="post">
                <input name="id"
                       type="hidden"
                       value="<?php echo $_POST['id'] ?>"
                ><br>
                <div class="form-group input-group">
                    <input name="nom"
                           class="form-control"
                           placeholder="Non"
                           type="text"
                           value="<?php echo $employe->nom ?>"
                    >
                </div>
                <br>
                <div class="form-group input-group">
                    <input
                            name="prenom"
                            class="form-control"
                            placeholder="Prénom"
                            type="text"
                            value="<?php echo $employe->prenom ?>"
                    >
                </div>
                <br>
                <div class="form-check">
                    <input
                            class="form-check-input"
                            type="radio"
                            name="sexe"
                            value="Male"
                            id="sexeH"
                        <?php echo $employe->sexe === "Male" ? 'checked' : ''; ?>
                    >
                    <label
                            class="form-check-label"
                            for="sexeH">
                        Homme
                    </label>
                </div>
                <div class="form-check">
                    <input
                            class="form-check-input"
                            type="radio"
                            value="Female"
                            name="sexe"
                            id="sexeF"
                        <?php echo $employe->sexe === "Female" ? 'checked' : ''; ?>
                    >
                    <label
                            class="form-check-label"
                            for="sexeF"
                    > Femme
                    </label>
                </div>
                <br>
                <div class="form-group input-group">
                    <input
                            name="poste"
                            class="form-control"
                            placeholder="Poste" type="text"
                            value="<?php echo $employe->poste ?>"
                    >
                </div>
                <br>
                <div class="form-group input-group">
                    <select
                            class="form-control"
                            name="statut">
                        <option selected=""> Sélectionner une statut</option>
                        <option
                            <?php echo $employe->statut ? 'selected' : ''; ?>
                                value="1"
                                class="bg-success"
                        >Active
                        </option>
                        <option
                            <?php echo !$employe->statut ? 'selected' : ''; ?>
                                value="0"
                                class="bg-danger"
                        >Non-Ative
                        </option>
                    </select>
                </div>
                <br>
                <button
                        name="update"
                        class="btn btn-outline-primary m-auto"
                >Modifier
                </button>
                <br>
            </form>
        </article>
    </div>
</div>
