<?= $this->extend('Template/base') ?>
<?= $this->section('customtitle') ?>
<title>Hello acceuil</title>
<?= $this->endSection() ?>
<?= $this->section('custombody') ?>

<section>
<div class="center">
        <div class="bloc-fixe">
           <h3>PROMOTIONS</h3>
            <div class="container ">
                <div>
                    <img src="images/archetecture lego.jpeg" alt="archetecture">
                </div>
                <div>
                    <img src="images/ligne-droit.jpeg" alt="">
                </div>
                <div>
                    <img src="images/th (1).jpeg" alt="lego"></div>
                </div>
                
                
            </div>
        <div class="bloc-fixe">
            <h3>PLUS VENDUS</h3>
            <div class="container g1">
               <div>
                    <img src="images/archetecture lego.jpeg" alt="lego"></div>
                </div>
                
                <div >
                    <img src="images/tour.jpeg" alt="lego"></div>
                </div>
                
                
            </div>
        </div>
</div>
<div class="centre">

<div class="container">
                <div>
                    <img src="" alt="lego"></div>
                </div>
                
                <div>
                    <img src="images/tour.jpeg" alt="lego"></div>
                </div>
                

</div>

</section>
<?= $this->endSection() ?>