<?php


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Ikeouf - Inscrivez-vous et créez votre compte client</title>
</head>

<body>
    <main>
        <h1>Créez votre compte client</h1>
        <h2></h2>
        <form>
            <label for="nom">Nom :</label><br>
            <input type="text" id="nom" placeholder="Jacques Martin" name="nom"><br>
            <label for="email">Email :</label><br>
            <input type="email" id="email" placeholder="jacquesmartin@test.com" name="email"><br>
            <label for="password">Mot de passe :</label><br>
            <input type="password" id="password" placeholder="********" name="password"><br>
            <label>Choisissez un mot de passe entre 6 et 12 caractères</label>
        </form>
    </main>
</body>

</html>