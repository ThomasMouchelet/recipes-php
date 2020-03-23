<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<body>
    <nav>
        <a href="functions/disconnect.php">
            <div class="nav-bar">
                disconnect
            </div>
        </a>
        <a class="add-recipe" href="add-recipe.php">
            <i class="fas fa-plus"></i>
        </a>
    </nav>

    <div class="container">
    <?php
    require("functions/database.php");
                
    $req = $db->prepare("SELECT * FROM recettes WHERE author = :author ORDER BY id DESC");
    $req->bindParam(":author", $_SESSION["pseudo"]);
    $req->execute();

    $count = $req->rowCount();

    
    if($count === 0){
        ?>
            <div class="messageFirst">Bonjour <?= $_SESSION["pseudo"] ?>, Soyez le premier à poster une recette</div>
            <div class="addRecette">
                <a href="">
                    <button>Ajouter</button>
                </a>
            </div>
        <?php
    }

    while($result = $req->fetch(PDO::FETCH_ASSOC) ){

        ?>
        <div class="card">
            <a class="delete" href="functions/delete.php?recipes_id=<?= $result["id"] ?>">
                <i class="fas fa-trash"></i>
            </a>
            <a class="clone"  href="functions/clone.php?recipe_id=<?= $result["id"] ?>">
                <i class="fas fa-clone"></i>
            </a>
            <a class="edit" href="edit-recipe.php?recipe_id=<?= $result["id"] ?>">
                <i class="fas fa-edit"></i>
            </a>
            <div class="row">
                <div class="col-md-3">
                    <img src="<?= $result["image_url"] ?>" alt="">
                </div>
                <div class="col-md-9">
                    <div class="row">

                        <div class="col-md-12">
                            <h2><?= $result["title"] ?></h2>
                        </div>
                        <div class="col-md-5">
                            <p>
                                <h3>Ingredients</h3>
                                <?php
                                    $chaine=",";
                                    $test = str_replace(",", "<br>",$result["ingredients"]);
                                    echo $test;
                                ?>
                            </p>
                        </div>
                        <div class="col-md-7">
                            <p>
                                <h3>Steps</h3>
                                <?php
                                    $chaine=",";
                                    $test = str_replace(",", "<br><br>",$result["steps"]);
                                    echo $test;
                                ?>
                            </p>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    </div>

</body>
</html>

