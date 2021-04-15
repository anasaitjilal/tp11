<?php

include_once 'beans/Fonction.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class ClasseService implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }

    public function create($o) {
        $query = "INSERT INTO Classe VALUES (NULL,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getCode(), $o->getNom())) or die('Error');
    }

    public function delete($id) {
        $query = "DELETE FROM Classe WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from Classe";
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

    public function findById($id) {
        $query = "select * from Classe where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));
        $res = $req->fetch(PDO::FETCH_OBJ);
        $fonction = new Fonction($res->id, $res->code, $res->nom);
        return $fonction;
    }

    public function findByIdApi($id) {
        $query = "select * from Classe where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));
        $res = $req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE Classe SET nom = ?,code=? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNom(), $o->getCode(), $o->getId())) or die('Error');
    }

    public function findFiliere() {
        $query = "select * from Classe";
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

    public function findFiliere1($code_filiere) {
        $query = "select * from Classe where nom=? ";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($code_filiere));
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

    public function count() {
        $query = "select count(*) as nbr,code from Fonction group by code";
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

}
