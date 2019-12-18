<h1>Bienvenu sur TODOLISTE</h1>
<form method="post">
    <h1>Connexion</h1>
    <input type="hidden" id="ut_id" name="ut_id" value="<?= $ut_id ?>">
    
    <caption>
        <a href="<?= hlien("inscription", "edit", "&id=0") ?>">creer un compte </a>
    </caption>
    <p>
        <label for="ut_username">Identifiant </label>
        <input type="text" id="ut_username" name="ut_username" value="<?= $ut_username ?>">
    </p>
    <p>
        <label for="ut_passw">Mot de passe : </label>
        <input type="password" id="ut_passw" name="ut_passw" value="<?= $ut_passw ?>">
        
    </p>
    <p>
        <span><? echo $message ?></span>
        
        <input type="submit" value="valider" name="submit">

    </p>
</form>