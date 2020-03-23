<?php
session_start();
var_dump($_SESSION["pseudo"]);
var_dump($_POST["tilte"]);

require("database.php");

$req = $db->prepare("INSERT INTO recettes (author, title, ingredients, steps, image_url) VALUE (:author, :title, :ingredients, :steps, :image_url)");
$req->bindParam(":author", $_SESSION["pseudo"]);
$req->bindParam(":title", $_POST["title"]);
$req->bindParam(":ingredients", $_POST["ingredients"]);
$req->bindParam(":steps", $_POST["steps"]);
$req->bindParam(":image_url", $_POST["image_url"]);
$req->execute();

header("Location: ../recettes.php");