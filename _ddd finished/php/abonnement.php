<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'abonnement</title>
    <link rel="stylesheet" href="../Css/abonnement.css">
    <script defer src="../Js/abonnement.js"></script>
    <style>
        
    </style>
</head>
<body>
    <header>
       
        

    </header>
   


    <main>
        <section>
            <form action="./abonnementTraiter.php" method="post">
                <h4>Commander une Carte</h4>
                <hr>
                
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" id="prenom">
        
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom">
                
                <label for="tel">Telephone</label>
                <input type="" name="tel" id="tel">
        
                <label for="comment">Bus</label>
                <select name="bus" id="bus">
                    <option value="Colobane">Colobane</option>
                    <option value="Parcelle Assainie">Parcelle Assainie</option>
                    <option value="Ouakam">Ouakam</option>
                    <option value="Keur Massar">Keur Massar</option>
                    <option value="Diamniadio">Diamniadio</option>
                    <option value="Thiaroye">Thiaroye</option>
                </select>
        
                    
                <input type="submit" value="Valider">
                <p>Notre numero de service est <span>800 00 30 30</span><br>
                    Telephone Fixe : <span>33.800.00.00 </span> <br>
                    Telephone : <span>77.400.00.00 </span> 
        
                </p>
                <!-- <p class="p">Vous avez oubliè votre mot de passe ? <a href="mdp.php">cliquez ici</a></p> -->
            </form>

        </section>

   </main>

   
    
</body>
</html>