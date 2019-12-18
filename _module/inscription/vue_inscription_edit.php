
        <form method="post" >			
		<h1>Inscription d'un nouvelle utilisateur</h1>
                <input type="hidden" id="ut_id" name="ut_id" value="<?=$ut_id?>" >
                
				<p>
					<label for="ut_nom">Nom : </label>
					<input type="text" id="ut_nom" name="ut_nom" value="<?=$ut_nom?>" >
				</p>	
				<p>
					<label for="ut_prenom">Prenom : </label>
					<input type="text" id="ut_prenom" name="ut_prenom" value="<?=$ut_prenom?>" >
				</p>
				<p>
					<label for="ut_username">Login </label>
                    <input type="text" id="ut_username" name="ut_username" value="<?=$ut_username?>" >
				</p>
                <p>
					<label for="ut_passw">Mot de passe</label>
                    <input type="password" id="ut_passw" name="ut_passw" value="<?=$ut_passw?>" >
				</p>
			
				<p>
					<input type="submit" value="Enregistrer" name="submit" >
			
				</p>
			</form>


