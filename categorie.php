<?php

require_once("connect.php");

class categorie {
	private $id;
	private $nom;
	private $idGroupe;

	function __construct($id, $nom, $idGroupe) {
		$this->id = $id;
		$this->nom = $nom;
		$this->idGroupe = $idGroupe;
	}

	function getId(){
		return $this->id;
	}

	function getNom(){
		return $this->nom;
	}

	function getIdGroupe(){
		return $this->idGroupe;
	}


    function ajouter_dans_db(){
        $result = mysqli_query($co, "INSERT INTO categorie(nom,IDGroupe) VALUES('$this->nom','$this->idGroupe')") or die ("Exécution de la requête impossible".mysqli_error($co));
        $id = $mysqli->insert_id;
    }

    function modifier_dans_db(){
        $result = mysqli_query($co, "UPDATE categorie SET nom='$this->nom',IDGroupe='$this->idGroupe' WHERE IDCategorie='$this->id')") or die ("Exécution de la requête impossible".mysqli_error($co));
    }

	function supprimer_dans_db(){
        $result = mysqli_query($co, "DELETE FROM categorie WHERE IDCategorie='$this->id')") or die ("Exécution de la requête impossible".mysqli_error($co));
    }

}

?>