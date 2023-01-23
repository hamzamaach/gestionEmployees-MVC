<?php
class Employe{
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM employe');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    static public function getEmploye($data){
        $id = $data['id'];
        try {
            $query = 'SELECT * FROM employe WHERE id = :id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            $employe = $stmt->fetch(PDO::FETCH_OBJ);
            return $employe;
            $stmt->close();
            $stmt = null;
        }catch (PDOException $ex){
            echo 'error'.$ex->getMessage();
        }
    }


    static public function searchEmployes($data){
        $search = $data['search'];
        try {
            $query = 'SELECT * FROM employe 
                        WHERE nom LIKE ? 
                        OR prenom LIKE ?
                          ';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array('%'.$search.'%','%'.$search.'%'));
            return $stmt->fetchAll();
            if ($stmt->execute()){
                return 'ok';
            }
            $stmt->close();
            $stmt = null;
        }catch (PDOException $ex){
            echo 'error'.$ex->getMessage();
        }
    }


    static public function add($employe){
        $stmt = DB::connect()->prepare('INSERT INTO 
            employe(nom,prenom,statut,poste,sexe)
            values(:nom,:prenom,:statut,:poste,:sexe)
            ');
        $stmt->bindParam(':nom',$employe['nom']);
        $stmt->bindParam(':prenom',$employe['prenom']);
        $stmt->bindParam(':statut',$employe['statut']);
        $stmt->bindParam(':poste',$employe['poste']);
        $stmt->bindParam(':sexe',$employe['sexe']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }

    static public function update($employe){
        $query = 'UPDATE employe
            SET
                nom = :nom,
                prenom=:prenom,
                statut=:statut,
                poste=:poste,
                sexe=:sexe
            WHERE
                id = :id
            ';
        $stmt = DB::connect()->prepare($query);
        $stmt->bindParam(':id',$employe['id']);
        $stmt->bindParam(':nom',$employe['nom']);
        $stmt->bindParam(':prenom',$employe['prenom']);
        $stmt->bindParam(':statut',$employe['statut']);
        $stmt->bindParam(':poste',$employe['poste']);
        $stmt->bindParam(':sexe',$employe['sexe']);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }

    static public function delete($id){
        try {
            $query = 'DELETE FROM employe WHERE id = :id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            if ($stmt->execute()){
                return 'ok';
            }
            $stmt->close();
            $stmt = null;
        }catch (PDOException $ex){
            echo 'error'.$ex->getMessage();
        }
    }
}
?>