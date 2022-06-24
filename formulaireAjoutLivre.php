<?php

    require_once "class/Crud.php";

    $crud= new Crud;
    $selectAuteur = $crud->selectAuteur('auteur');
    $selectCategorie = $crud->selectCategorie('categorie');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>
<body>
    <header>    
        <h1>Ajouter un livre</h1>
        <div>
            <button><a href="formulaireAjoutAuteur.php">Ajouter un auteur</a></button>
            <button><a href="index.php">Retour a la liste</a></button>
            
        </div>
        
    </header>
<div class="ajout">
    <div class="form_ajout">
            <form action="livre-post.php" method="POST">

                <label for="titre">Titre</label>
                <input type="text" id="titre" name="titre" maxlenght="30">

                <label for="langueLivre">Langue</label>
                <input type="text"  id="langueLivre" name="langueLivre" maxlenght="45">

                <label for="anneeSortie">Annee Sortie</label>
                <input type="date" id="anneeSortie" name="anneeSortie" maxlenght="20">

                <label for="nbPages">Nombre Pages</label>
                <input type="text" id="nbPages" name="nbPages" maxlenght="20">

                <label for="anneeParution">Annee Parution</label>
                <input type="date" id="anneeParution" name="anneeParution" maxlenght="20">

                <label for="image">Image</label>
                <input type="text" id="image" name="image" maxlenght="20" value = "./img/Capture-3.jpg">

                <label for="auteur_idAuteur">Auteur</label>
                <select name="auteur_idAuteur" id="auteur_idAuteur">
                    <?php
                      
                        foreach($selectAuteur as $key){
                        
                            foreach($key as $champ => $valueChamp){
                                
                                $$champ  = $valueChamp;
                            }
                            
                            echo '<option value="'.$idAuteur.'">'.$nom.' '.$prenom.'</option>';
                        }
                    ?>

                </select>

                <label for="categorie_idCategorie">Categorie</label>
                <select name="categorie_idCategorie" id="categorie_idCategorie">
                    <?php
                      
                        foreach($selectCategorie as $key){
                        
                            foreach($key as $champ => $valueChamp){
                                
                                $$champ  = $valueChamp;
                            }
                            
                            echo '<option value="'.$idCategorie.'">'.$nomCategorie.'</option>';
                        }
                    ?>

                </select>
                <input type="submit" value="Submit">
            </form>
        </div>        
        
</div>
    
</body>
</html>