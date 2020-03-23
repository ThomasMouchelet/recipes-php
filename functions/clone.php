<?php
require('database.php');

$req = $db->prepare("SELECT * FROM recettes WHERE id = :recipe_id");
$req->bindParam(":recipe_id", $_GET["recipe_id"]);
$req->execute();

$result = $req->fetch(PDO::FETCH_ASSOC);

$req = $db->prepare("INSERT INTO recettes(author, title, ingredients, steps, image_url) VALUE (:author, :title, :ingredients, :steps, :image_url)");
$req->bindParam(":author", $result["author"]);
$req->bindParam(":title", $result["title"]);
$req->bindParam(":ingredients", $result["ingredients"]);
$req->bindParam(":steps", $result["steps"]);
$req->bindParam(":image_url", $result["image_url"]);
$req->execute();

header("Location: ../recettes.php");