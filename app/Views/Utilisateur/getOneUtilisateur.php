<?=$this->extend('Template/base');?>
<?=$this->section('customtitle');?>
<title>Identifier un utilisateur</title>
<?=$this->endSection();?>

<?=$this->section('custombody');?>
<h1>One Utilisateur</h1>

    <p><?=$utilisateur->email_utilisateur?></p>
<?=$this->endSection();?>