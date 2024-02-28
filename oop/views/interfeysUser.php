<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="..\css\register.css">
    <title>Бақайдгирӣ</title>
</head>
<body>
<center>
        <div class="div1">
            <h1>Register</h1>
            <div class="forma">
    <form action="../class/registrUser.php" method="post">
        <label for="">Ном:</label>
        <input type="text" name="nameUser" id="nameUser"><br>
        <label for="">Логин:</label>
        <input type="text" name="loginUser" id="loginUser"><br>
        <label for="">Парол:</label>
        <input type="password" name="parolUser" id="parolUser"><br>
        <label for="">Паролро такрор намоед:</label>
        <input type="password" name="repparolUser" id="repparolUser"><br>
        <input type="submit" value="Бақайдгузорӣ">
    </form>
    <a href="index.php">Воридшавӣ</a>
    </div>
        </div>
    </center>
</body>
</html>