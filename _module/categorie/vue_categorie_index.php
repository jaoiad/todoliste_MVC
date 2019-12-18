<h1>Bienvenu sur Mon Auto école</h1>
        <table>
            <caption>
                <a href="<?=hlien("categorie","edit","&id=0")?>">Créer un categorie</a>
            </caption>
            <tr>
                <th>cat id</th>
                <th>categorie label</th>
                <td>editer</td>
                <td>supprimer</td>
            </tr>
            <?php
            $sql="select * from categorie ";
            $data=$link->query($sql);
           
            foreach($data as $row) {
                $row=array_map("cb_htmlentities",$row);
                extract($row);
                echo "<tr>";
                echo "<td>$cat_id</td>";
                echo "<td>$cat_label</td>";
                echo "<td><a href='" . hlien("categorie","edit","&id=$cat_id") . "'>Editer</a></td>";
                echo "<td><a href='" . hlien("categorie","del","&id=$cat_id") . "'>Supprimer</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
