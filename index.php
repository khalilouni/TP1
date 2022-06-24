<?php



require_once './class/Crud.php';
$crud = new Crud;
$select = $crud->select('livre');


//var_dump($select);
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
        <h1>Liste de livres</h1>
        <div>
            <button><a href="formulaireAjoutLivre.php">Ajouter un livre</a></button>
        </div>
        
    </header>
    
    <div class="grid">            
        <?php
            foreach ($select as $row) {
        ?>
        <div class="grid_item">
            <div class="grid_item">

                <div>
                    <ul>
                        <li>Titre : <?php echo $row["titre"]; ?></li>
                        <li>Langue : <?php echo $row["langueLivre"]; ?></li>
                        <li>Annee de sortie : <?php echo $row["anneeSortie"]; ?></li>
                        <li>Nombre de pages : <?php echo $row["nbPages"]; ?></li>
                        <li>Annee de parution :  <?php echo $row["anneeParution"]; ?></li>
                        <li>Auteur : <?php echo $row["nom"].' '.$row["prenom"]; ?></li>
                        <li>Categorie : <?php echo $row["nomCategorie"]; ?></li>
                    </ul>
                </div>
                
                <div>
                    <button><a href="deleteLivre.php?id=<?php echo $row['idLivre'] ?>">Supprimer ce livre</a></button>
                    <button><a href="formulaireModification.php?id=<?php echo $row['idLivre'] ?>">Modifier ce livre</a></button>
                    
                </div>

            </div>

            <div>
                <img src="<?php echo $row['image']?>" alt="">
            </div>
            
        </div>
        
        <?php  
                    }
        ?>
        
    </div>


    
</body>
</html>





