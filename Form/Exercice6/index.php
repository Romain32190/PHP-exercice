
    <?php
    if($_POST ["genre"] === null || $_POST["nom"] === null|| $_POST["prenom"] === null) {

    echo  '<form action="index.php" method="POST">
      <select name="genre">
      <option></option>
      <option>Mr</option>
      <option>Mme</option>
      </select>
      <label>Votre nom</label>
      <input type="text" name="nom"/></p>
      <label>Votre prénom</label>
      <input type="text" name="prenom"/></p>
      <button type="submit">Validez</button>
      </form>';

    } else {
       echo $_POST['genre'] . ' ' . $_POST['nom'] . ' ' . $_POST['prenom'];

    }
    ?>
