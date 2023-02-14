<?php
if (isset($_POST['find'])) {
    $data = new EmployesController();
    $employes = $data->findEmployes();
} else {
    $data = new EmployesController();
    $employes = $data->getAllEmployes();
}
?>
<div class="body">
<div class="container mt-3 bg-light pt-4">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <?php include('./views/includes/alert.php'); ?>
            <a href="<?php echo base ?>add" class="btn btn-outline-primary">Ajouter <i class="bi-person-plus-fill"></i></a>
            <div class="" style="width: 300px; float: right">
                <form method="post" class="float-right d-flex flex-row">
                    <input type="search" name="search" placeholder="Rechercher" class="form-control"/>
                    <button type="submit" name="find" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <table class="table table-striped table-hover text-center">
                <thead>
                <tr class="bg-primary table-hd">
                    <th scope="col">#id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Poste</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($employes as $employe): ?>
                    <tr>
                        <th scope="row">
                            <?php echo $employe['id']; ?>
                        </th>
                        <td>
                            <?php echo $employe['nom']; ?>
                        </td>
                        <td>
                            <?php echo $employe['prenom']; ?>
                        </td>
                        <td>
                            <?php echo $employe['sexe']; ?>
                        </td>
                        <td>
                            <?php echo $employe['poste']; ?>
                        </td>
                        <td>
                            <?php echo $employe['statut']
                                ?
                                '<span class="badge bg-success ">Active</span>'
                                :
                                '<span class="badge bg-danger">Non-Active</span>';
                            ?>
                        </td>
                        <td>
                            <form method="post" action="<?php echo base ?>update" class="d-inline">
                                <input type="hidden" name="id" value="<?php echo $employe['id']; ?>">
                                <button class="btn btn-outline-primary"><i class="bi bi-pencil"></i></button>
                            </form>
                            <form method="post" action="<?php echo base ?>delete" class="d-inline">
                                <input type="hidden" name="id" value="<?php echo $employe['id']; ?>">
                                <button class="btn btn-outline-danger" onclick="suppressionAlert()" ><i class="bi bi-person-x-fill"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
                <script>
                    function suppressionAlert() {
                        alert("Voulez-vous supprimer l'employé ?")
                    }
                </script>
            </table>
        </div>
    </div>
</div>
</div>
