<?= $this->extend('Template/base') ?>
<?= $this->section('customtitle') ?>
<title>Hello acceuil</title>
<?= $this->endSection() ?>
<?= $this->section('custombody'); ?>
<ul class="products-list">
<h1><?= $marque ->nom_marque ?></h1>
<?php foreach ($produits as $p) : ?> 

<p><?= $p ?></p>
<?php endforeach ?>
</ul>
<?= $this->endSection() ?>