<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="functions/add-recipe-script.php" method="post">
        <input type="text" placeholder="Title" name="title">
        <textarea placeholder="Ingredient 1; Ingredient 2; ..." name="ingredients"></textarea>
        <textarea placeholder="Etape 1; Etape 2; ..." name="steps"></textarea>
        <input type="text" value="https://via.placeholder.com/300" name="image_url">
        <input type="submit" value="Envoyer">
    </form>

</body>
</html>