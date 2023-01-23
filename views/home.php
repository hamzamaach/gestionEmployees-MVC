<?php
    $data = new EmployesController();
    $employes = $data->getAllEmployes();
    // print_r($employes)
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <a href="<?php echo base?>add" class="btn btn-outline-info">Ajouter</a>
            <table class="table table-striped table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">sexe</th>
                    <th scope="col">poste</th>
                    <th scope="col">statut</th>
                    <th scope="col">Action</th>
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
                            <form method="post" action="<?php echo base?>update" class="d-inline">
                                <input type="hidden" name="id" value="<?php echo $employe['id']; ?>">
                                <button class="btn btn-outline-primary"><i class="bi bi-pencil"></i></button>
                            </form>
                            <form method="post" action="<?php echo base?>delete" class="d-inline">
                                <input type="hidden" name="id" value="<?php echo $employe['id']; ?>">
                                <button class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
