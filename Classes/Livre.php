<?php

class Livre{
    private string $titre;
    private int $nbPage;
    private int $annee;
    private float $prix;
    private Auteur $auteur;
    
    //constructeur 
    public function __construct(string $titre,int $annee, int $nbPage, float $prix, Auteur $auteur ){

        $this->titre = $titre;
        $this->nbPage = $nbPage;
        $this->annee = $annee;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addLivre($this);


    }

    //getters et setters 

    public function getTitre()
    {
        return $this->titre;
    }

    
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNbPage()
    {
        return $this->nbPage;
    }

    
    public function setNbPage($nbPage)
    {
        $this->nbPage = $nbPage;

        return $this;
    }

   
    public function getAnnee()
    {
        return $this->annee;
    }

    
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

   
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

   
    public function getAuteur(): Auteur
    {
        return $this->auteur;
    }

    public function setAuteur(Auteur $auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getInfos(){
        return $this->getTitre()."(".$this->getAnnee().")".$this->getNbPage(). " pages / ".$this->getPrix()." €<br>";
    }




    public function __toString()
    {
       return $this->titre;
    }

   
}