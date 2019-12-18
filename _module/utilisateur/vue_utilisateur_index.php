<table>
    <caption>
        <a href="<?= hlien("utilisateur", "edit", "&id=0") ?>">Créer un utilisateur</a>
    </caption>
    <thead>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>username</th>
            <th>passw</th>
            <th>editer</th>
            <th>supprimer</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $sql = "select * from utilisateur";
        $res = $link->query($sql);
        while ($row = $res->fetch()) {
            extract($row);

            echo "<tr>";
            echo "<td>$ut_id</td>";
            echo "<td>$ut_nom</td>";
            echo "<td>$ut_prenom</td>";
            echo "<td>$ut_username</td>";
            echo "<td>$ut_passw</td>";
            echo "<td><a href='" . hlien("utilisateur", "edit", "&id=$ut_id") . "'>editer</a></td>";
            echo "<td><a href='" . hlien("utilisateur", "del", "&id=$ut_id") . "'>supprimer</a></td>";
            echo "</tr>";
        }

        ?>
    </tbody>

</table>