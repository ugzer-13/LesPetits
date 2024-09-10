<?= $this->extend('Template/base') ?>
<?= $this->section('customtitle') ?>
<title>age choisi</title>
<?= $this->endSection() ?>
<?= $this->section('custombody'); ?>
<ul class="products-list">

<p><?= $age->description ?></p>
</ul>
<?= $this->endSection() ?>