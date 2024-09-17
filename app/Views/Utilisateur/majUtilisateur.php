<?= $this->extend('Template/base'); ?>
<?= $this->section('customtitle') ?>
<title> Ajouter un utilisateur</title>
<?= $this->endSection(); ?>
<?= $this->section('custombody'); ?>
<h1>Ajouter un utilisateur</h1>
<?= form_open('majutilisateur/' . $utilisateur->idutilisateur); ?>
<label>Email</label>
<input type="email" name="email_utilisateur" value="<?= $utilisateur->email_utilisateur ?>">
<?= validation_show_error('email_utilisateur'); ?>
<input type="submit" value="envoyer" />
<?= form_close(); ?>
<?= $this->endSection(); ?>