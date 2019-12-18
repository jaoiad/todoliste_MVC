<form method="post">
            <input type='hidden' name='cat_id' id='cat_id' value='<?= $cat_id ?>'>
            <p>
                <label for='cat_label'>cat_label</label>
                <input type='text' name='cat_label' id='cat_label' required value='<?= htmlentities($cat_label,ENT_QUOTES,"utf-8") ?>'>
            </p>            
            <input type="submit" name="submit" value="Enregistrer">
        </form>
