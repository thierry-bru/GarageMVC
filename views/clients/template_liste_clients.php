<TABLE>
    <TR>
        <TH>Prenom</TH>
        <TH>Nom</TH>
        <TH>Adresse</TH>
    </TR>
    <?php
foreach ($listeClients as $key => $client) {
?>
    <TR>
        <TD><?=$client['prenom']?></TD>
        <TD><?=$client['nom']?></TD>
        <TD><?=$client['adresse']?></TD>
    </TR>
    <?php
}?>
</TABLE>
<a href="index.php?command=form-client">Ajout d'un client</a>