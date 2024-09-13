<?=$this->extend('Template/base');?>


<?=$this->section('custombody');?>
<h1> Utilisateurs_emails</h1>
<?php foreach($utilisateurs as $u):?>
    <p><?=$u->email_utilisateur?></p>
    <?php endforeach;?>
<?=$this->endSection();?>