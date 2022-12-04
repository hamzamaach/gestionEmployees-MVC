<?php
require_once './autoload.php';
class EmployesController
{
    public function getAllEmployes()
    {
        $employes = Employe::getAll();
        return $employes;
    }
}
?>