<?php

class Auteur{
    private string $nom;
    private string $prenom;
    private array $livres;



// constructeurs

    public function __construct(string $nom, string $prenom){

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];
        
    }

 // getters et setters 

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

        
        public function getLivres()
        {
            return $this->livres;
        }
        
        
        public function setLivres($livres)
        {
            $this->livres = $livres;
            
            return $this;
        }
        
        public function addLivre(Livre $livre){
            $this->livres[] = $livre;
            
        }

        public function afficherLivres(){
            $result = "<h1>Livre de $this</h1>";

            foreach($this->livres as $livre){   // boucle permettant d'afficher une liste de livres et les infos necessaire(grace à la fonction getInfo) de l'auteur en question (dans this )
                $result .= $livre->getInfos();
            }

            return $result;
        }

        public function __toString()
        {
            return $this->nom." ".$this->prenom; // nous affiche a chaque fois le nom et le prenom 
          
        }
}