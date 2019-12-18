
        <h1>Tache en cours</h1>
    <table>
        <caption>
        <a href="<?= hlien("tache", "edit", "&id=0") ?>">editer une nouvelle tache</a>
        </caption>
        <thead>
            <tr>
                <th>id</th>
                <th>categorie</th>
                <th>libellé</th>
                <th>date et heures</th>
                <th>archiver</th>
                <th>editer</th>
                <th>supprimer</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $sql = "select * from tache, categorie, utilisateur where tac_categorie=cat_id and tac_utilisateur=ut_id ";
            $res = $link->query($sql);
            while ($row = $res->fetch()) {
               extract($row);     
              

                echo "<tr>";
                echo "<td>$tac_id</td>";
                echo "<td>$cat_label</td>";
                echo "<td>$tac_label</td>";
                echo "<td>$tac_date_heure</td>";
                echo "<td>$tac_archive</td>";
                echo "<td><a href='" . hlien("tache","edit","&id=$tac_id") . "'>Editer</a></td>";
                echo "<td><a href='" . hlien("tache","del","&id=$tac_id") . "'>Supprimer</a></td>";
                echo "</tr>";
            }


            ?>
        </tbody>
        <hr>
    </table>


</html>