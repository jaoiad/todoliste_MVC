<h1>Création de la BDD</h1>
		<pre>
        <?php
        $sql=file_get_contents("../creation_base_todo.sql");        
		echo $sql;        
        $link->setAttribute(PDO::ATTR_EMULATE_PREPARES, 0);
        $link->exec($sql);        
        ?>
		</pre>