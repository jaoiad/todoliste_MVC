
        <form method="post" >			
		<h1>Utilisateur : Edit</h1>
                <input type="hidden" id="ut_id" name="ut_id" value="<?=$ut_id?>" >
                
				<p>
					<label>ut_id : </label><span><?=$ut_id?></span>
				</p>
				<p>
					<label for="ut_nom">ut_nom : </label>
					<input type="text" id="ut_nom" name="ut_nom" value="<?=$ut_nom?>" >
				</p>	
				<p>
					<label for="ut_prenom">ut_prenom : </label>
					<input type="text" id="ut_prenom" name="ut_prenom" value="<?=$ut_prenom?>" >
				</p>
				<p>
					<label for="ut_username">ut_username : </label>
                    <input type="text" id="ut_username" name="ut_username" value="<?=$ut_username?>" >
				</p>
                <p>
					<label for="ut_passw">ut_passw : </label>
                    <input type="password" id="ut_passw" name="ut_passw" value="<?=$ut_passw?>" >
				</p>
			
				<p>
					<input type="submit" value="Enregistrer" name="submit" >
			
				</p>
			</form>

