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

    <?php
        require_once "class/Crud.php";

        $crud = new Crud;
        $client = $crud->selectId($_REQUEST["id"]);
	
        foreach($client as $key=>$value){
            $$key = $value;
        }
    
    ?>

<header>
        <h1>Modifier ce livre</h1>
        <button><a href="index.php">Retour a la liste</a></button>
</header>
<div class="ajout">
    <div class="form_ajout">
        <form action="updateLivre.php" method="POST">

            <label for="Titre">Titre</label>
            <input type="text" name="titre" value="<?php echo $Titre ?>">

            <label for="anneeSortie">Annee de sortie</label>
            <input type="text" name="anneeSortie" value="<?php echo $anneeSortie ?>">

            <label for="anneeParution">annee de parution</label>
            <input type="text" name="anneeParution" value="<?php echo $anneeParution ?>">

            <label for="nbPages">nombre de pages</label>
            <input type="text" name="nbPages" value="<?php echo $nbPages ?>">

            <input type="hidden" name="idLivre" value="<?php echo $idLivre ?>">
            <input type="hidden" name="langueLivre" value="<?php echo $langueLivre ?>">
            <input type="hidden" name="auteur_idAuteur" value="<?php echo $auteur_idAuteur ?>">
            <input type="hidden" name="categorie_idCategorie" value="<?php echo $categorie_idCategorie ?>">
            <input type="hidden" name="image" value="<?php echo $image ?>">

	
		
            <input type="submit" name="" value="soumettre">

        </form>
    </div>
    
</div>
    
</body>
</html>