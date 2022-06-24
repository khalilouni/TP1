<?php


class Crud extends PDO{

    public function __construct(){
        parent::__construct("mysql:host=localhost;dbname=e2196079", "e2196079", "0sX6YaLax3zy4ezLV0Ab");
    }


    public function insert($table, $data){

        $nomChamp = implode(", ",array_keys($data));
        $valeurChamp = ":".implode(", :", array_keys($data));

        $sql ="INSERT INTO $table ($nomChamp) VALUES ($valeurChamp)";

        $query = $this->prepare($sql);
        foreach($data as $key=>$value){
            $query->bindValue(":$key", $value);
        }
        if(!$query->execute()){
            return $query->errorInfo();
        }else{
            return $this->lastInsertId();
        }
    }

    public function insertAuteur($table, $data){

        $nomChamp = implode(", ",array_keys($data));
        $valeurChamp = ":".implode(", :", array_keys($data));

        $sql ="INSERT INTO $table ($nomChamp) VALUES ($valeurChamp)";

        $query = $this->prepare($sql);
        foreach($data as $key=>$value){
            $query->bindValue(":$key", $value);
        }
        if(!$query->execute()){
            return $query->errorInfo();
        }else{
            return $this->lastInsertId();
        }
    }


    public function select($table, $champOrdre = null, $ordre = null){
        if($champOrdre == null){
            $sql= "SELECT idLivre, titre, langueLivre, anneeSortie, nbPages, image, anneeParution, nom, prenom, nomCategorie FROM livre LEFT JOIN auteur ON livre.auteur_idAuteur = auteur.idAuteur JOIN categorie ON livre.categorie_idCategorie = categorie.idCategorie";
        }else{
            $sql = "SELECT * FROM $table ORDER BY $champOrdre $ordre";
        }
        $query = $this->query($sql);
        return $query->fetchAll();
    }

    public function delete($table, $idLivre) {
        $sql = "DELETE FROM $table WHERE idLivre = $idLivre";
        $query = $this->prepare($sql);
        if(!$query->execute()){
            print_r($query->errorInfo());
        }else{
            header("Location: index.php");
        }
    }

    public function selectId($idLivre) {

        $sql = "SELECT * FROM livre WHERE idLivre = $idLivre";
        $query = $this->prepare($sql);
        $query->execute();
        return $query->fetch();

    }


    public function update($table, $data, $champ, $id){
        $champRequete = null;
        foreach($data as $key=>$value){
            $champRequete .=$key."=:".$key.", ";
        }
        $champRequete = rtrim($champRequete, ", ");
        $sql = "UPDATE $table SET $champRequete WHERE $champ = :$champ";

        $query= $this->prepare($sql);
        foreach($data as $key=>$value){
            $query->bindValue(":$key", $value);
        }
        if(!$query->execute()){
            print_r($query->errorInfo());
        }else{
            header("Location: index.php");
        }
    }

    public function selectAuteur($table){
        
        $sql = "SELECT * FROM $table";
        $query = $this->query($sql);
        return $query->fetchAll();
    }

    public function selectCategorie($table){
        
        $sql = "SELECT * FROM $table";
        $query = $this->query($sql);
        return $query->fetchAll();
    }

}