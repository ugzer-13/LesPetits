<?= $this->extend('Template/base') ?>
<?= $this->section('customtitle') ?>
<title>Hello acceuil</title>
<?= $this->endSection() ?>
<?= $this->section('custombody') ?>

<article class="big-card">
    <img src="<?= $images[0] ?>" alt="">
    <h1><?= $title ?></h1>
    <p><?= $description ?></p>
    <span><?= $brand ?></span>
    <span><?= $price ?>€</span>
</article>
<?= $this->endSection() ?>
