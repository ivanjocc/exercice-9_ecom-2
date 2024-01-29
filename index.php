<?php
// Point 1
class Personne {
    protected $nom;
    protected $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function __toString() {
        return $this->prenom . " " . $this->nom;
    }
}

// Point 2
class Etudiant extends Personne {
    private $numero;
    private $groupe;

    public function __construct($nom, $prenom, $numero, $groupe) {
        parent::__construct($nom, $prenom);
        $this->numero = $numero;
        $this->groupe = $groupe;
    }

    // Point 4
    public function __toString() {
        return parent::__toString() . ", numero: " . $this->numero . ", groupe: " . $this->groupe->getNumero();
    }
}

// Point 3
class Enseignant extends Personne {
    private $numero;
    private $statut;

    public function __construct($nom, $prenom, $numero, $statut) {
        parent::__construct($nom, $prenom);
        $this->numero = $numero;
        $this->statut = $statut;
    }

	// Point 4
    public function __toString() {
        return parent::__toString() . ", numero: " . $this->numero . ", statu: " . $this->statut;
    }
}

// Point 2
class Groupe {
    private $numero;

    public function __construct($numero) {
        $this->numero = $numero;
    }

    public function getNumero() {
        return $this->numero;
    }
}

// Point 5
$groupe = new Groupe(23123);
$etudiant1 = new Etudiant("ivan", "jose", 12312314, $groupe);
$etudiant2 = new Etudiant("tigre", "grrr", 13123, $groupe);
$enseignant = new Enseignant("joseph", "claude", 1234131, "monsieur");

echo $etudiant1;
echo '<br>';
echo $etudiant2;
echo '<br>';
echo $enseignant;
?>
