<?php include "modules/connexion_bdd.php"; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Mon css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <?php include "modules/header.php" ?>
    </header>

    <main>
        <?php include "modules/main.php" ?>

        <table>
            <thead>
                <tr>
                <th>Salle</th>
                <th>Disponibilité</th>
                </tr>
            </thead>
            <tbody>                

                    <?php
                        $dispo = new ma_connexion("localhost","app_reservation","root","");
                        $requete = $dispo -> select("*","salles");

                        foreach($requete as $salles ){
                            echo "                           
                                <tr>
                                    <td><strong>" . $salles['numero'] . "</strong></td>
                                    <td>". $salles['dispo'] ."</td>
                                </tr>      
                            ";
                        }
                    ?>
                
            </tbody>
        </table>

    </main>

    <footer>
        <?php include "modules/footer.php" ?>
    </footer>
<script src="script.js"></script>
</body>
</html>