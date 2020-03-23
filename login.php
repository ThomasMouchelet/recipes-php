<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<body id="login">
    <video autoplay loop id="bgvid">
        <source src="dist/videos/video.mp4" type="video/mp4">
    </video>

    <form action="functions/loginAction.php" method="post">
        <input type="text" placeholder="Créer ma page de recette" name="pseudo">
        <input type="submit" value="connexion">
        <div class="message">
        <?php
        if(isset($_GET["message"])){
            echo $_GET["message"];
        }
        ?>
        </div>
    </form>
    
    

</body>
</html>