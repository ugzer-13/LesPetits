<?= $this->extend('Template/base') ?>
<?= $this->section('customtitle') ?>
<title>Hello acceuil</title>
<?= $this->endSection() ?>
<?= $this->section('custombody'); ?>
<ul class="products-list">

<p><?= $marque->nom_marque ?></p>
</ul>
<?= $this->endSection() ?>