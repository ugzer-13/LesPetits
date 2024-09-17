<?php foreach ($contenu as $cont) : ?>

    <?php if (property_exists($cont, 'idcategorie')) : ?>
        <a href="<?= base_url('categorie/').$cont->idcategorie ?>"><?= $cont->nom_categorie; ?></a><br>
    <?php endif; ?>

    <?php if (property_exists($cont, 'idmarque')) : ?>
        <a href="<?= base_url('marque/').strtolower($cont->nom_marque).'/all' ?>"><?= $cont->nom_marque; ?></a><br>
    <?php endif; ?>

    <?php if (property_exists($cont, 'idtranche')) : ?>
        <a href="<?= base_url('age/').$cont->idtranche ?>"><?= $cont->description; ?></a><br>
    <?php endif; ?>

<?php endforeach; ?>