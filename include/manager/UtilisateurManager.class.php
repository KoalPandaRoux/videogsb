<?php

class UtilisateurManager
{
    //instance pdo
    private $base;
    private $login;

    public function __construct($base)
    {
        $this->setDb($base);
    }

    public function setDb($base)
    {
        $this->base = $base;
    }

    public function getContenuParLogin()
    {
        $tableau = array();
        $compteur = 0;
        $resultat = $this->base->query('SELECT * FROM utilisateur order by login');
        //fetch sur chaque ligne ramenée par la requête
        while ($ligne = $resultat->fetch())
        {
            $utilisateur = new Utilisateur();
            $utilisateur->setLogin($ligne['login']);
            $utilisateur->setPrenom($ligne['prenom']);
            $utilisateur->setNom($ligne['nom']);
            $utilisateur->setPassword($ligne['password']);
            $utilisateur->setEmail($ligne['email']);
            $utilisateur->setDateNaissance($ligne['date_de_naissance']);
            $tableau[$compteur] = $utilisateur; //stockage de l'objet dans le tableau
            $compteur++;
        }
        return $tableau;
    }

    //fonction qui insert les utilisateur
     public function ajoutUtilisateur(Utilisateur $utilisateur)
     {
        //Insertion des informations utilisateur
        $sql = "INSERT INTO utilisateur(login, prenom, nom, password, email, date_de_naissance) VALUES ('".$utilisateur->getLogin()."', '".$utilisateur->getPrenom()."','".$utilisateur->getNom()."','".$utilisateur->getPassword()."','".$utilisateur->getEmail()."', '".$utilisateur->getDateNaissance()."')";
        echo $sql;
        $this->base->exec($sql);
        //récupération du dernier identifiant
        $identifiant = $this->base->lastInsertId();
        return $identifiant;
    }

}
