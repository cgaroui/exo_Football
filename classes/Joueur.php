<?php

class Joueur{

    private string $nom;
    private string $prenom;
    private DateTime $naissance;
    private Pays $nationalite;
    private array $cariere;

    public function __construct(string $nom, string $prenom, string $naissance, Pays $nationalite)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->naissance = new datetime($naissance);
        $this->nationalite = $nationalite;
        $this->nationalite->addContenir($this);
        $this->cariere = [];
    }


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

    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getCariere()
    {
        return $this->cariere;
    }

    
    public function setCariere($cariere)
    {
        $this->cariere = $cariere;

        return $this;
    }

    
    public function addContenir(Contenir $cariere){      
        $this->cariere[] = $cariere;

    }



    public function __toString()
    {
        return $this->getNom()." ".$this->getPrenom();
    }

    
   
}