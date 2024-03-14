<?php


class Contenir{
    private DateTime $dateDebut;
    private Equipe $equipe;
    private Joueur $joueur;


//constructeur 
    public function __construct(string $dateDebut, Equipe $equipe, Joueur $joueur)
    {
        $this->dateDebut = new DateTime($dateDebut);
        $this->equipe = $equipe;
        $this->joueur = $joueur;
    }


//getters and setters 
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }


    public function getEquipe()
    {
        return $this->equipe;
    }

   
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;

        return $this;
    }

    public function getJoueurs()
    {
        return $this->joueur;
    }

    
    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;

        return $this;
    }

   

    public function afficherJoueurs(){
        $result = "<ul>";                       //fonction qui affiche sous forme de liste les eleùent contenu dans tableau joueurs et les affiche 

        foreach($this->joueurs as $joueur){
            $result .= "<li>$joueur</li>";    

        }
        $result .="</ul>";
        return $result;
        
    }

 
    

    public function afficherEquipe(){
        $result = "<ul>";

        foreach($this->equipes as $equipe){         //fonction qui affiche sous forme de liste les eleùent contenu dans tableau equipes  et les affiche 
            $result .= "<li>$equipe</li>";
        }
        $result .="</ul>";
        return $result;
    }




 

   
}