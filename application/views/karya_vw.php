<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/head.php'); ?>
</head>

<body class="bg">
    <?php $this->load->view('partials/navbar.php'); ?>
    <h1 class="title">Creation</h1>

    <div class="container-x">
        <img src="<?= base_url('assets/images/ibis-bird.jpeg') ?>" alt="my picture">
        <img src="<?= base_url('assets/images/pexels.jpeg') ?>" alt="my picture">
        <img src="<?= base_url('assets/images/pexels2.jpeg') ?>" alt="my picture">
    </div>

    <div class="grid-container">
        <div class="grid-item">Lukisan1 Bila inggin memasukan image lagi</div>
        <div class="grid-item">Lukisan2 Bila inggin memasukan image lagi</div>
        <div class="grid-item">Lukisan3 Bila inggin memasukan image lagi</div>
    </div>
    <?php $this->load->view('partials/footer.php'); ?>
</body>
</html>