<?php

class User
{
    // Propriétés
    protected $pseudo;
    private $email;
    private $signature;
    private $actif;

    // Méthodes
    public function __construct($pseudo, $email, $signature) {
        //echo "Construct !";
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->signature = $signature;
        $this->actif = true;
    }
    public function __Destruct() {
        echo "Destruct de " . $this->pseudo . "!";
    }
    public function getPseudo() // fonction sans paramètres
    {
        return $this->pseudo;
    }
    public function setPseudo($newPseudo)
    {
        if (!empty($newPseudo) and strlen($newPseudo) < 10) {
            $this->pseudo = $newPseudo;
        } else {
        echo "<p>Pseudo vide ou trop long !</p>";
        }
    }
    public function setEmail($newEmail)
    {
        if (!empty($newEmail) and strlen($newEmail) < 100) {
            $this->email = $newEmail;
        } else {
        echo "<p>Email vide ou trop long !</p>";
        }
    }
    public function envoyerEmail($titre, $message) {
        $retour = mail($this->email, $titre, $message);
        //if (!$retour and DEBUG) my_log("Pb mail !");
        return $retour;
    }
    public function bloquer() {
        $this->actif = false;
        $this->envoyerEmail("Alerte user !", "Vous êtes bloqué !");
    }
}