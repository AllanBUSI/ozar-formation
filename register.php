<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        div.form {
            padding: 5%;
            border: 1px solid black;
        }
    </style>

</head>
<body>
    <div class="form">
        <form action="/controller/register.php" method="post">
            <input name="email" type="email" placeholder="Email">
            <br/>
            <input name="password" type="password" placeholder="Mot de passe">
            <br/>
            <input type="submit" value="Valider">
        </form>
    </div>
</body>
</html>