<?php
if (isset($_POST['id'])) {
    $oldEmploye = new EmployesController();
    $employe = $oldEmploye->getOneEmploye();
}else{
    Redirect::to('home');
}
if (isset($_POST['update'])) {
    $oldEmploye = new EmployesController();
    $oldEmploye->updateEmploye();
}
?>

<div class="container">
    <div class="card bg-light">
        <a href="<?php echo base?>home" class=""><i class="bi bi-house"></i></a>
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Mis a jour</h4>
            <form method="post">
                <input name="id"
                       type="hidden"
                       value="<?php echo $_POST['id']?>"
                >
                <div class="form-group input-group">
                    <input name="nom"
                           class="form-control"
                           placeholder="Non"
                           type="text"
                           value="<?php echo $employe->nom?>"
                    >
                </div>
                <div class="form-group input-group">
                    <input
                            name="prenom"
                            class="form-control"
                            placeholder="Prénom"
                            type="text"
                            value="<?php echo $employe->prenom?>"
                            >
                </div>
                <div class="form-group input-group">
                    <input
                            type="radio"
                            name="sexe"
                            value="Male"
                        <?php echo $employe->sexe === "Homme" ? 'checked':'';?>
                    >Male
                    <input
                            type="radio"
                            name="sexe"
                            value="Female"
                        <?php echo $employe->sexe === "Female" ? 'checked':'';?>
                    >Female

                </div>
                <div class="form-group input-group">
                    <input
                            name="poste"
                            class="form-control"
                            placeholder="Poste" type="text"
                            value="<?php echo $employe->poste?>"
                    >
                </div>
                <div class="form-group input-group">
                    <select
                            class="form-control"
                            name="statut">
                        <option selected=""> Sélectionner une statut</option>
                        <option
                                <?php echo $employe->statut ? 'selected':'';?>
                                value="1"
                                class="bg-success"
                        >Active</option>
                        <option
                            <?php echo !$employe->statut ? 'selected':'';?>
                                value="0"
                                class="bg-danger"
                        >Non-Ative</option>
                    </select>
                </div>
                <button
                        name="update"
                        class="btn btn-outline-primary m-auto"
                >Modifier</button>
            </form>
        </article>
    </div>
</div>
