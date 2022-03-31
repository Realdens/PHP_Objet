<?php

include_once("user.class.php");

class Admin extends User  //Extends permet l'héritage
{
    private $droits;

    public function supprimerUser($user) {
        echo "<p>L'administrateur " . $this->pseudo . " supprime l'utilisateur " . $user->pseudo . "</p>";
    }
    
}