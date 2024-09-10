<?= $this->extend('Template/base') ?>
<?= $this->section('customtitle') ?>
<title>les ages disponibles</title>
<?= $this->endSection() ?>
<?= $this->section('custombody') ?>
<div class="container-border">

<?php foreach ($ages as $a) : ?> 

<p><?= $a->description ?></p>
<?php endforeach ?>

<?= $this->endSection() ?>

