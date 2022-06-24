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
        <button><a href="index.php">Retour a la liste</a></button>
    </header>
    <div class="ajout">

        <div class="form_ajout">
            <form action="auteur-post.php" method="POST">
                <label for="nom">Nom d'auteur</label>
                <input type="text" id="nom" name="nom" maxlenght="30">
                <label for="prenom">Prenom d'auteur</label>
                <input type="text"  id="prenom" name="prenom" maxlenght="45">
                <label for="nationnalite">nationalite</label>
                <input type="text" id="nationnalite" name="nationnalite" maxlenght="20">
                <label for="dateNaissance">date de naissance</label>
                <input type="date" id="dateNaissance" name="dateNaissance" maxlenght="20">
                <input type="submit" value="Submit">
            </form>
        </div>
            
    </div>
        
        

    
</body>
</html>