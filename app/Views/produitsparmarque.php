<?= $this->extend('Template/base') ?>
<?= $this->section('customtitle') ?>
<title>Hello acceuil</title>
<?= $this->endSection() ?>
<?= $this->section('custombody'); ?>
<h1><?= $produits[0]->nom_marque ?></h1>

<?php foreach ($produits as $p) : ?> 
<ul class="products-list">

<p><?= $p->nom_produit ?></p></ul>

<?php endforeach ?>
<?= $this->endSection() ?>