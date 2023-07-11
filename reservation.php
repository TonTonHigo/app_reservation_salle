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

            <section id="formulaire">

                <div class="login-box">

                    <h2>Reserver une salle</h2>

                    <form action="demande.php" method="POST">

                        <div class="user-box">
                            <input type="text" name="nom" required="">
                            <label for="nom">Nom</label>
                        </div>

                        <div class="user-box">
                            <input type="text" name="prenom" required="">
                            <label form="prenom">Prénom</label>
                        </div>

                        <div class="user-box">
                            <input type="email" name="email" required="">
                            <label for="email">Email</label>
                        </div>

                        <div class="user-box">
                            <input type="number" name="salle" required="">
                            <label for="salle">Salle souhaiter</label>
                        </div>

                        <div class="user-box">
                            <small>Date de début</small>
                            <input type="date" name="date_entree" required="">
                            <label for="date_entree"></label>
                        </div>

                        <div class="user-box">
                            <small>Date de fin</small>
                            <input type="date" name="date_sortie" required="">
                            <label for="date_sortie"></label>
                        </div>

                        <button id="aled" href="#" type="submit">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Submit
                        </button>
                    </form>
                </div>
            </section>

    </main>

    <footer>
        <?php include "modules/footer.php" ?>
    </footer>
<script src="script.js"></script>
</body>
</html>