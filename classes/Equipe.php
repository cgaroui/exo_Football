<?php

class Equipe{
    
    private string $nomEquipe;
    private DateTime $dateCreation;
    private array $carieres;
    private Pays $pays;


//constructeur
    public function __construct(string $nomEquipe, string $dateCreation, Pays $pays)
    {
        $this->nomEquipe = $nomEquipe;
        $this->pays = $pays;
        $this->dateCreation = new dateTime($dateCreation);
        $this->carieres = [];
        $pays->addEquipe($this);
       
    }


//getters and setters 
   
    
    public function getNomEquipe()
    {
        return $this->nomEquipe;
    }

    public function setNomEquipe($nomEquipe)
    {
        $this->nomEquipe = $nomEquipe;

        return $this;
    }


    public function getDateCreation()
    {
        return $this->dateCreation;
    }

     
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getPays()
    {
        return $this->pays;
    }

   
    public function setPays(Pays $pays)
    {
        $this->pays = $pays;

        return $this;
    
    }

    public function addCariere(Contenir $cariere ) {
        $this->carieres[] = $cariere;
    }

    public function CariereJoueur(){
        $carieres = [] ;

        foreach($this->carieres as $cariere){
            $carieres[] = $cariere->getJoueur();
        }
        return $carieres;

    }


    public function __toString()
    {
        return $this->nomEquipe.$this->dateCreation->format('Y')."<br>";
    }

    public function afiicherJoueurs(){
        $result = "<ul> ";
            $this->nomEquipe . '</br>'
            . $this->pays->getPays() . " - "
            . $this->dateCreation->format('Y') . '</br>';

        foreach($this->carieres as $cariere){ 
                $result .= "<li>$cariere</li>";
            }
            $result = "</ul> ";
        }

    }


