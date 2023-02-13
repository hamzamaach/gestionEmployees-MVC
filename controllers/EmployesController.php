<?php

class EmployesController
{
    public function getAllEmployes()
    {
        $employes = Employe::getAll();
        return $employes;
    }

    public function getOneEmploye()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']
            );
        }
        $employe = Employe::getEmploye($data);
        return $employe;
    }

    public function findEmployes()
    {
        if (isset($_POST['search'])) {
            $data = array(
                'search' => $_POST['search']
            );
        }
        $employes = Employe::searchEmployes($data);
        return $employes;
    }

//    Cette méthode est pour ajouter un employé
    public function ajouterEmploye()
    {
        if (isset($_POST['add'])) {
            $employe = array(
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'statut' => $_POST['statut'],
                'poste' => $_POST['poste'],
                'sexe' => $_POST['sexe']
            );
            $resultat = Employe::add($employe);
            if ($resultat === 'ok') {
                Session::set('success', "L'employé a été ajouter !");
                Redirect::to('home');
            } else {
                echo $resultat;
            }
        }
    }

//    Cette méthode est pour inserer plusieur employés depuis un fichier excel
    public function ajouterExcel()
    {
        if (isset($_FILES['excel']['name'])) {
            include 'xlsx.php';
            $excel = SimpleXLSX::parse(($_FILES['excel']['tmp_name']));
            for ($sheet = 0; $sheet < sizeof($excel->sheetNames()); $sheet++) {
                $i = 1;
                $rowCol = $excel->dimension($sheet);
                $employe = array();
                if ($rowCol[0] != 1 && $rowCol[1] != 1) {
                    foreach ($excel->rows($sheet) as $key => $row) {
                        $q = "";
                        $query = "";
                        if ($i != 0) {
                            echo "<br>";
                            $employe = array(
                                'nom' => $row[0],
                                'prenom' => $row[1],
                                'sexe' => $row[2],
                                'poste' => $row[3],
                                'statut' => $row[4]
                            );
                        }
                        $i++;
                        $resultat = Employe::addExcel($employe);
                        if ($resultat === 'ok') {
                            Session::set('success', "Les employés a été ajouter !");
                            Redirect::to('home');
                        } else {
                            echo $resultat;
                        }
                    }
                }
            }
        } else {
            edirect::to('404');
        }
    }

//    Cette méthode est pour mettre à jour un employé
    public
    function updateEmploye()
    {
        if (isset($_POST['update'])) {
            $employe = array(
                'id' => $_POST['id'],
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'statut' => $_POST['statut'],
                'poste' => $_POST['poste'],
                'sexe' => $_POST['sexe']
            );
            $resultat = Employe::update($employe);
            if ($resultat === 'ok') {
                Session::set('success', "L'employé a été modifier !");
                Redirect::to('home');
            } else {
                echo $resultat;
            }
        }
    }

//    Cette méthode est pour supprimer un employé
    public
    function deleteEmploye()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $resultat = Employe::delete($id);
            if ($resultat === 'ok') {
                Session::set('success', "L'employé a été supprimmer !");
                Redirect::to('home');
            } else {
                echo $resultat;
            }
        }
    }
}

?>
