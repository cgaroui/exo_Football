<?php

class Joueur{

    private string $nom;
    private string $prenom;
    private DateTime $naissance;
    private Pays $nationalite;
    private array $carieres;

    public function __construct(string $nom, string $prenom, string $naissance, Pays $nationalite)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->naissance = new datetime($naissance);
        $this->nationalite = $nationalite;
        $this->carieres = [];
    }

//getters and setters
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

  
    public function getNaissance()
    {
        return $this->naissance;
    }

  
    public function setNaissance($naissance)
    {
        $this->naissance = $naissance;

        return $this;
    }


    public function getNationalite()
    {
        return $this->nationalite;
    }

    public function setNationalite(Pays $nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getCarieres() 
    {
        return $this->carieres;
    }

    
    public function setCarieres($cariere)
    {
        $this->carieres = $cariere;

        return $this;
    }

    
    public function addCariere(Contenir $cariere){      
        $this->carieres[] = $cariere;

    }


    public function getAge(){           //fonction pour calculer l'age et renvoyer l'age (seulement en année)
        $today = new \DateTime();     
        $diff = $this->naissance->diff($today);
        return $diff->format("%Y");
    }

    

    public function __toString()
    {
        return $this->getNom()." ".$this->getPrenom();
    }

    public function cariereDunJoueur(){             //fonction qui permet d'afficher la cariere d'un joueur , son nom prenom age  
        $result =   $this->nom." ".$this->prenom."<br>".$this->getAge();

        foreach($this->carieres as $cariere){               //puis grace à cette boucle pn aura un affichage de chaque equipe du joueur avec anneé de debut 
            $result .= 
            "<br>".$cariere->getEquipe() . "(" . $cariere->getDateDebut()->format('Y')  . ')';
        }
        return $result;
    }

}
