<?= $this->extend('Template/base') ?>
<?= $this->section('customtitle') ?>
<title>Hello acceuil</title>
<?= $this->endSection() ?>
<?= $this->section('custombody') ?>

</section>
<section class="promotions my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card p-3 text-center">
                        <h5>PROMOTIONS</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <button class="btn btn-outline-secondary">←</button>
                            <img src="images/archetecture lego.jpeg" alt="LEGO Promo" class="img-fluid">
                            <img src="mages/th (1).jpeg" alt="LEGO Promo" class="img-fluid">
                            <button class="btn btn-outline-secondary">→</button>
                        </div>
                        <p>LEGO 123€</p>
                        <p>LEGO 77€</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-3 text-center">
                        <h5>Notre sélection</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <button class="btn btn-outline-secondary">←</button>
                            <img src="images/archetecture lego.jpeg" alt="LEGO Sélection" class="img-fluid">
                            <img src="images/tour.jpeg" alt="LEGO Sélection" class="img-fluid">
                            <button class="btn btn-outline-secondary">→</button>
                        </div>
                        <p>LEGO 123€</p>
                        <p>LEGO 77€</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section ÂGES -->
    <section class="ages my-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card p-3">
                        <img src="public/images/0-2.jpeg" alt="0-3 ans" class="img-fluid">
                        <p class="mt-3">0-3 ans</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <img src="public/images/4-9.jpeg" alt="4-9 ans" class="img-fluid">
                        <p class="mt-3">4-9 ans</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <img src="public/images/10-15.jpeg" alt="10-15 ans" class="img-fluid">
                        <p class="mt-3">10-15 ans</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>