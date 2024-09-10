<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="<?= base_url('style/style.css')?>">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <?= $this->renderSection('customcss') ?>
    <?= $this->renderSection('customtitle') ?>
</head>

<body>

    <div id="container-main">
        <header>
        <?php include('header.php'); ?>
        <?php include('navbar.php'); ?>

        </header>
        <?= $this->renderSection('custombody') ?>
        <?php include('footer.php'); ?>
    </div>

    <?= $this->renderSection('customscript') ?>
    <script src="https://kit.fontawesome.com/b0df598b2f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>