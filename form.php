<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form  action="thanks.php"  method="post">
        <div>
          <label for="lname">Nom :</label>
          <input type="text"  id="lname"  name="user_lastname">
        </div>
        
        <div>
          <label for="fname">Prénom :</label>
          <input type="text"  id="fname"  name="user_firstname">
        </div>

        <div>
          <label for="courriel">Courriel :</label>
            <input type="email"  id="courriel"  name="user_email">
        </div>

        <div>
          <label for="telephone">Numéro de téléphone :</label>
            <input type="telephone"  id="telephone"  name="user_phone">
        </div>

        <div> 
          <label for="sujet">Sujet :</label>
            <select id="sujet" name="sujet">
                  <option valeur="php">PHP</option>
                  <option valeur="mysql">MySQL</option>
                  <option valeur="js">JS</option>
                  <option valeur="other">Autre</option>
            </select>
        </div>

        <div>
          <label for="message"> Votre message :</label>
           <textarea id="message" name="user_message" placeholder="Rédigez votre message ici."></textarea>
        </div>

        <div  class="button">
          <button type="submit">Envoyer votre message</button>
        </div>

      </form>

</body>
</html>      
