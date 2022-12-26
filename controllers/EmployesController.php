<?php
// require_once './autoload.php';
echo $_POST['nom'] .'<br>'. $_POST['prenom'] .'<br>'. $_POST['statut'] .'<br>'. $_POST['poste'] .'<br>'. $_POST['sexe'].'<br>';
class EmployesController
{
    public function getAllEmployes()
    {
        $employes = Employe::getAll();
        return $employes;
    }
}
?>
salam