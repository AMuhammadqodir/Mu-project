<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <title>Воридшавӣ</title>
</head>
<body>
    <?php 
        if(isset($_SESSION['error']))
        {
            echo $_SESSION['error'];
        }
    ?>
    <center>
        <div class="div1">
            <h1>Register</h1>
            <div class="forma">
    <form action="class/autoristion.php" method="post">
        <label for="">Логин:</label>
        <input type="text" name="login" id="login"><br>
        <label for="">Парол:</label>
        <input type="password" name="parol" id="parol"><br>
        <input type="submit" value="Воридшавӣ">
    </form>
    
    <a href="views/interfeysUser.php">Бақайдгирӣ</a>
    </div>
        </div>
    </center>

        

</body>
</html>
