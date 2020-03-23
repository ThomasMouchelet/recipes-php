<?php
require("database.php");

$req = $db->prepare("DELETE FROM recettes WHERE id = :recipes_id");
$req->bindParam(":recipes_id", $_GET["recipes_id"]);
$req->execute();

header("Location: ../recettes.php");