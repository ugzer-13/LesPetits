<?= $this->extend('Template/base') ?>
<?= $this->section('customtitle') ?>
<title>Hello acceuil</title>
<?= $this->endSection() ?>
<?= $this->section('custombody'); ?>
<ul class="products-list">
<?php foreach ($products as $product ) :?>
    <li >
        <a href="<?php echo base_url('product/'.$product['id']);?>">
            <article class="card">
                <img src="<?= $product['images'][0] ?>" alt="">
                <h1><?= $product['title'] ?></h1>
                <p><?= $product['description'] ?></p>
                <span><?= $product['brand'] ?></span>
                <span><?= $product['price'] ?>€</span>
            </article>
        </a>
    </li>
<?php endforeach ?>
</ul>
<?= $this->endSection() ?>
