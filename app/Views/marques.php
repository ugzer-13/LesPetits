<?= $this->extend('Template/base') ?>
<?= $this->section('customtitle') ?>
<title>Hello acceuil</title>
<?= $this->endSection() ?>
<?= $this->section('custombody'); ?>
<ul class="products-list">

<?php foreach ($marques as $m) : ?> 

<p><?= $m->nom_marque ?></p>
<?php endforeach ?>
</ul>
<?= $this->endSection() ?>