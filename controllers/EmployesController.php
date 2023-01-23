<?php
// require_once './autoload.php';
// echo $_POST['nom'] .'<br>'. $_POST['prenom'] .'<br>'. $_POST['statut'] .'<br>'. $_POST['poste'] .'<br>'. $_POST['sexe'].'<br>';
class EmployesController
{
    public function getAllEmployes()
    {
        $employes = Employe::getAll();
        return $employes;
    }

    public function getOneEmploye()
    {
        if (isset($_POST['id'])){
            $data = array(
                'id'=> $_POST['id']
            );
        }
        $employe = Employe::getEmploye($data);
        return $employe;
    }

    public function ajouterEmploye()
    {
        if (isset($_POST['add'])){
            $employe = array(
                'nom'=>$_POST['nom'],
                'prenom'=>$_POST['prenom'],
                'statut'=>$_POST['statut'],
                'poste'=>$_POST['poste'],
                'sexe'=>$_POST['sexe']
            );
            $resultat = Employe::add($employe);
            if ($resultat === 'ok'){
                Redirect::to('home');
            }else{
                echo $resultat;
            }
        }
    }

    public function updateEmploye()
    {
        if (isset($_POST['update'])){
            $employe = array(
                'id'=>$_POST['id'],
                'nom'=>$_POST['nom'],
                'prenom'=>$_POST['prenom'],
                'statut'=>$_POST['statut'],
                'poste'=>$_POST['poste'],
                'sexe'=>$_POST['sexe']
            );
            $resultat = Employe::update($employe);
            if ($resultat === 'ok'){
                Redirect::to('home');
            }else{
                echo $resultat;
            }
        }
    }

    public function deleteEmploye()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $resultat = Employe::delete($id);
            if ($resultat === 'ok') {
                Redirect::to('home');
            } else {
                echo $resultat;
            }
        }
    }
}
?>
