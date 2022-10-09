</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/head.php'); ?>
</head>

<body class="bg">
    <?php $this->load->view('partials/navbar.php'); ?>
    <h1 class="title">Creation-Animal World</h1>
    
	<div class="container-x">

        <img src="<?= base_url('assets/images/ape.jpeg') ?>" alt="my picture">
        <img src="<?= base_url('assets/images/elephant.jpeg') ?>" alt="my picture">
        <img src="<?= base_url('assets/images/horse.jpeg') ?>" alt="my picture">
        <img src="<?= base_url('assets/images/ibis-bird.jpeg') ?>" alt="my picture">
        <img src="<?= base_url('assets/images/pexels.jpeg') ?>" alt="my picture">
        <img src="<?= base_url('assets/images/pexels2.jpeg') ?>" alt="my picture">

	</div>
    <?php $this->load->view('partials/footer.php'); ?>
</body>

</html>