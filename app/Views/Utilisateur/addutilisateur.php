<?=$this->extend('Template/base');?>
<?=$this->Section('customtitel')?>
<title>Test Formulaire</title>
<?=$this->endSection()?>
<?=$this->Section('custombody')?>
<h1>ajouter un utilisateur</h1>
<?=form_open('addutilisateur')?>



<?=form_label ('Email','email_utilisateur')?>
<?=form_input('email','',[],'email')?><!-- '':pour le value et []pour les classes-->
<?=validation_show_error('email')?>
    

<?=form_label ('mot de passe','mdp_utilisateur')?>
<?=form_password('mdp_utilisateur')?> 
<?=validation_show_error('mot_passe')?>
<?=form_submit('envoyer','envoyer')?>
<?=form_close()?>
<?=$this->endSection()?>
