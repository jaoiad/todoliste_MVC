<h1>tache n°<?= $id ?></h1>
<form method="post">
    <input type='hidden' name='tac_id' id='tac_id' value='<?= $tac_id ?>'>
    <p>
        <label for='tac_categorie'>tac_categorie</label>
        <select name='tac_categorie' id='tac_categorie'>
            <?php
            HTMLselect($link, "select cat_id id, cat_label label from categorie", $tac_categorie);
            ?>
        </select>
    </p>
    <p>
        <label for='tac_label'>tac_label</label>
        <input type='text' name='tac_label' id='tac_label' required value='<?= htmlentities($tac_label, ENT_QUOTES, "utf-8") ?>'>
    </p>
    <p>
        <label for='tac_date_heure'>tac_date_heure</label>
        <input type='text' name='tac_date_heure' id='tac_date_heure' required value='<?= htmlentities($tac_date_heure, ENT_QUOTES, "utf-8") ?>'>
    </p>
    <p>
        <label for='tac_memo'>tac_memo</label>
        <input type='text' name='tac_memo' id='tac_memo' required value='<?= htmlentities($tac_memo, ENT_QUOTES, "utf-8") ?>'>
    </p>
    <p>
        <label for="tac_archive">tac_archive : </label>
        <input type="checkbox" id="tac_archive" name="tac_archive" <?= ($tac_archive != 0) ? "checked" : "" ?> value="<?= $tac_archive ?>">
    </p>
  

    <p>
        <label for='tac_utilisateur'>tac_utilisateur</label>
        <input type='text' name='tac_utilisateur' id='tac_utilisateur' required value='<?= htmlentities($tac_utilisateur,ENT_QUOTES,"utf-8")?>'>
    </p>
    <input type="submit" name="btsubmit" value="Enregistrer">
</form>


</table>