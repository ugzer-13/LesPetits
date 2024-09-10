<?=$this->extend('Template/base');?>
<?=$this->Section('customtitel')?>
<title>Test Formulaire</title>
<?=$this->endSection()?>
<?=$this->Section('custombody')?>
<h1>ajouter une Categorie</h1>
<?=form_open('addcategorie')?>

<?=form_label ('nom_categorie','nom_categorie')?>
<?=form_input('nom_categorie')?> 
<?=validation_show_error('nom_categorie')?>


<?=form_submit('envoyer','envoyer')?>
<?=form_close()?>
<?=$this->endSection()?>