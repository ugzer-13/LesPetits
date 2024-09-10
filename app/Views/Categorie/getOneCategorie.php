<?=$this->extend('Template/base');?>
<?=$this->Section('customtitle')?>
<title>
<?=$categorie->nom_categorie;?>
</title>
<?=$this->endSection()?>
<?=$this->Section('custombody')?>




<p><?=$categorie->nom_categorie;?></p>

<?=$this->endSection()?>