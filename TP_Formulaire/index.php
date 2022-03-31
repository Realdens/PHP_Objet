<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

            <form action="traitement.php" method="post">
                <div>
                    <label for="bankcode">Code banque</label>
                    <input type="texte" name="bankcode" placeholder="Entrez code banque">
                </div><br>
                <div>
                    <label for="agencycode">Code agence</label>
                    <input type="texte" name="agencycode" placeholder="Entrez code agence">
                </div><br>
                <div>
                    <label for="accountnumber">N° de compte</label>
                    <input type="texte" name="accountnumber" placeholder="Entrez N° de compte">
                </div><br>
                <div>
                    <label for="ribkey">Clé RIB</label>
                    <input type="texte" name="ribkey" placeholder="Entrez votre clé RIB">
                </div>
                <input type="submit" value="Envoyer">
            </form><br>
        

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>
</html>