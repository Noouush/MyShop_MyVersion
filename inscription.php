<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Ikeouf - Subscription form</title>
</head>

<body>
    <main>
        <h1>Create your personnal account</h1>
        <h2></h2>
        <form>
            <label for="name">Name :</label><br>
            <input type="text" id="name" placeholder="John Doe" name="name"><br>
            <label for="email">Email :</label><br>
            <input type="email" id="email" placeholder="johndoe@test.com" name="email"><br>
            <label for="password">Password :</label><br>
            <input type="password" id="password" placeholder="********" name="password"><br>
            <label>Choose a password between 6 and 12 characters</label>
        </form>
    </main>
</body>

</html>