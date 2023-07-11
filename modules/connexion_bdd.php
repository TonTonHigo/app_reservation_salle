<?php


class ma_connexion{

    private $host;
    private $nom_bd;
    private $user;
    private $password;
    private $connexionPDO;

    public function __construct($host, $nom_bd, $user, $password)
    {
        $this -> host = $host;
        $this -> nom_bd = $nom_bd;
        $this -> user = $user;
        $this -> password = $password;

        try {

            $dsn = "mysql:host=" . $this-> host . "; dbname=" . $this-> nom_bd . "; charset:=utf8mb4_0900_ai_ci";
            $this-> connexionPDO = new PDO($dsn, $this-> user, $this-> password);
            $this-> connexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // echo "<style> body{background-color: lightcyan; color: darkbrown;} </style>";
            // echo "connexion réussi" . "<br>" ."↜(╰ •ω•)╯!" . "<br>";

        } catch (PDOException $e) {

            echo "connexion pas marché!" . "<br>" ."(╥╯⌒╰╥๑)" . "<br>";
            echo "<style> body{background-color: #FB4640; color: white;} </style>";
            echo "Erreur : " . $e->getMessage();

        }
    }

    // SECLECTION
    public function select( $colonne, $table){
        try {

            $select = "SELECT $colonne FROM $table";

            $requete = $this -> connexionPDO -> prepare($select);
            $requete -> execute();
            $afficher = $requete -> fetchAll(PDO::FETCH_ASSOC);

            return $afficher;

        } catch (PDOException $e) {

            echo "Erreur : " . $e->getMessage();

        }
    }



    // INSERTION demande
    public function insert_demande($nom, $prenom, $email , $date_entree, $date_sortie, $numero_salle){
        try {

            $insertion = "INSERT INTO  `demande`(nom, prenom, email , date_entree, date_sortie, numero_salle) VALUES (?, ?, ?, ?, ?, ?)";

            $requete = $this -> connexionPDO -> prepare($insertion);
            $requete->bindValue(1, $nom, PDO::PARAM_STR);
            $requete->bindValue(2, $prenom, PDO::PARAM_STR);
            $requete->bindValue(3, $email, PDO::PARAM_STR);
            $requete->bindValue(4, $date_entree);
            $requete->bindValue(5, $date_sortie);
            $requete->bindValue(6, $numero_salle, PDO::PARAM_INT);

        
            $requete->execute();

        } catch (PDOException $e) {

            echo "Erreur : " . $e->getMessage();

        }
    }


}

//$test = new ma_connexion("localhost", "massage", "root", "");
// $users = $test -> select("*","users");

// var_dump($articles = $test -> select("*","articles"));
 //$test -> insert_articles("titre", "resume", "titre_2" , "contenu", "titre_3", "contenu_2", "photo", "1960-08-14", "oof");
// $test -> update_client("2","hampter","antartique","hampter@gmail.com");
// $test -> delete_client("5");

?>




