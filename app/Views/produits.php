<?= $this->extend('Template/base') ?>
<?= $this->section('customtitle') ?>
<title>Hello acceuil</title>
<?= $this->endSection() ?>
<?= $this->section('custombody'); ?>
<ul class="products-list">

<?php foreach ($produits as $p) : ?> 

<p><?= $p->nom_produit ?></p>
<?php endforeach ?>
</ul>
<?= $this->endSection() ?>