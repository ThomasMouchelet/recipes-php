<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    require("functions/database.php");
    $req = $db->prepare("SELECT * FROM recettes WHERE id = :recipe_id");
    $req->bindParam(":recipe_id", $_GET["recipe_id"]);
    $req->execute();
    $result = $req->fetch(PDO::FETCH_ASSOC);
?>
    <form action="functions/edit-recipe-script.php?recipe_id=<?= $_GET["recipe_id"] ?>" method="post">
        <input type="text" placeholder="Title" name="title" value="<?= $result["title"] ?>">
        <textarea placeholder="Ingredient 1; Ingredient 2; ..." name="ingredients" >
            <?= $result["ingredients"] ?>
        </textarea>
        <textarea placeholder="Etape 1; Etape 2; ..." name="steps">
            <?= $result["steps"] ?>
        </textarea>
        <input type="text" value="<?= $result["image_url"] ?>" name="image_url">
        <input type="submit" value="Envoyer">
    </form>

</body>
</html>