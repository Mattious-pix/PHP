<form action="index.php?page=contact" method="POST">
  <fieldset>
    <legend>Donne-moi tes fesses</legend>
  <div>
    <label form="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="<?=$nom ?>" />
  </div>
  <div>
    <label form="prenom">Prénom :</label>
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
  </div>
  </fieldset>
    <input type="hidden" name="frmContact" />
</form>
