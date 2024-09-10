<?php foreach ($xx as $x) : ?>
<a href="categorie/<?= $x->idcategorie ?>"><?= $x->nom_categorie; ?></a>
<br>
<?php endforeach; ?>