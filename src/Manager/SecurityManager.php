<?php

class SecurityManager
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }

    /**
     * @return Security
     */
    public function connexion($email, $password)
    {
        $sql = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $sql->execute(array($email));
        $data = $sql->fetch(\PDO::FETCH_ASSOC);

        if(password_verify($password, $data['password'])) {
            return $data;
        }
        return false;
    }

    

    public function inscription($email, $firstName, $lastName, $password)
    {
        
        // Extraction du formulaire d'inscription avec la méthode $_POST
        if(isset($_POST['submit'])){
            extract($_POST);
    
            // Hashage
            if(!empty($password) && !empty($cpassword) && !empty($email)) {
                if($password == $cpassword) {
                    $options = [
                        'cost' => 12,
                    ];
                    // Hashage du mot de passe
                    $hashpass = password_hash($passwords, PASSWORD_BCRYPT, $options);
            
                    // Prépartion de la requête 
                    $c = $db->prepare("SELECT email FROM users WHERE email= '$email'");
                    $c->execute(['email' => $email]);
                    $result = $c->rowCount();
            
                    // Création du Compte
                    if($result == 0) {
                        $q = $db->prepare("INSERT INTO email(email, password, firstname, lastname, is_admin) VALUES('$email', '$hashpass','$firstname','$lastname','$is_admin')");
                        $q->execute([
                        'email' => $email,
                        'password' => $hashpass
                        ]);
                        echo '<div>';
                        echo '<h1 class="">Compte Créé.</h1>';
                        echo '</div>';

                    // Sinon renvoie une erreur
                    } else {
                        echo '<div>';
                        echo '<h1 class="">Email déjà utilisé.</h1>';
                        echo '</div>';
                    }
                }
            }
        }
    }
}