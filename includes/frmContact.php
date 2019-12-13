<form action="index.php?page=contact" method="POST">
  <fieldset>
    <legend>Donne-moi tes fesses</legend>
  <div>
    <label form="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="<?=$nom ?>" />
  </div>
  <div>
    <label form="prenom">Prénom :</label>
<<<<<<< HEAD
    <input type="text" name="prenom" id="prenom" value="<?=$prenom ?>"/>
  </div>
  <div>
    <label form="mail">Email :</label>
    <input type="text" name="mail" id="mail" value="<?=$mail ?>"/>
  </div>
  <div>
    <label form="msg">Message :</label>
    <textarea type="text" name="msg" id="msg"><?=$msg ?> </textarea>
    </div>
  <div>
    <input  type="submit" value="Clique moi !!!!!" />
=======
    <input type="text" name="prenom" id="prenom" />
  </div>
  <div>
    <label form="mail">Email :</label>
    <input type="text" name="mail" id="mail" />
  </div>
  <div>
    <label form="msg">Message :</label>
    <textarea type="text" name="msg" id="msg"> </textarea>
    </div>
  <div>
    <input  type="submit" value="Envoyer" />
>>>>>>> 5065a9469fd0f96c78e0af878b12c0d2e1971835
  </div>
  </fieldset>
    <input type="hidden" name="frmContact" />
</form>
