<?= $this->extend('Template/base') ?>
<?= $this->section('customtitle') ?>
<title>Hello acceuil</title>
<?= $this->endSection() ?>
<?= $this->section('custombody'); ?>
<ul class="products-list">
<?= $produit->nom_produit ?>
</ul>
<?= $this->endSection() ?>