<?php

session_start();
require("database.php");

$req = $db->prepare("UPDATE recettes SET author = :author, title = :title, 
ingredients = :ingredients, steps = :steps, image_url = :image_url 
WHERE id = :recipe_id");
$req->bindParam(":author", $_SESSION["pseudo"]);
$req->bindParam(":title", $_POST["title"]);
$req->bindParam(":ingredients", $_POST["ingredients"]);
$req->bindParam(":steps", $_POST["steps"]);
$req->bindParam(":image_url", $_POST["image_url"]);
$req->execute();

// header Location