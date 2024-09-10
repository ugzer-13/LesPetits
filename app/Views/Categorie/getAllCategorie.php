<?php use CodeIgniter\I18n\Time;?>
<?=$this->extend('Template/base');?>


<?=$this->section('custombody');?>
<h1>Liste des categories</h1>
<?php foreach($categories as $c):?>
    
    <p><?=$c->nom_categorie?></p>
    
    <?php endforeach;?>
<?=$this->endSection();?>