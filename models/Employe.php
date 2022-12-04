<?php
class Employe{
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM employe');
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        // $stmt = null;
    }
}
?>
<?php
