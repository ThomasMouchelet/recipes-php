<?php

if($_POST["pseudo"] == ""){
    header("Location: ../login.php?message=Entrez un pseudo");    
}else{
    header("Location: ../recettes.php");
    session_start();
    $_SESSION["pseudo"] = $_POST["pseudo"];
}
