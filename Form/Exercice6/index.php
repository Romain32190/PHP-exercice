
    <?php
    if($_POST ['genre'] === null && $_POST['nom'] === null && $_POST['prenom'] === null) {

    echo  '<form action="index.php" method="POST">
      <select name="genre">
      <option>Mr</option>
      <option>Mme</option>
      </select>

      <p>Votre nom : <input type="text" name="nom"/></p>
      <p>Votre prenom : <input type="text" name="prenom"/></p>
      <p><input type="submit" value="OK"></p>
      </form>';

    } else {
       echo $_POST['genre'] . ' ' . $_POST['nom'] . ' ' . $_POST['prenom'];

    }
    ?>
