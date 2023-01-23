<?php
if (isset($_POST['id'])) {
    $Employe = new EmployesController();
    $Employe->deleteEmploye();
}
?>