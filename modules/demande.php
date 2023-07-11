<?php
    include "connexion_bdd.php";

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $salle = $_POST['salle'];
    $date_entree = $_POST['date_entree'];
    $date_sortie = $_POST['date_sortie'];

    $demande = new ma_connexion("localhost", "app_reservation", "root", "");
    $compare = $demande -> select("*","salles");

    foreach($compare as $ligne){
        
        if($ligne['numero'] == $salle && $ligne['dispo'] != "indisponible"){

            $insert_demande = $demande -> insert_demande($nom, $prenom, $email, $date_entree,  $date_sortie, $salle);
    
            $insert_salle = $demande -> update_salle($date_entree, $date_sortie, $salle);
            header("Location: ../dispo.php");
            exit();
        }
        else{
            header("Location: ../index.php");
            exit(); 
        }
    }
   
    
?>