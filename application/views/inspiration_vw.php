<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/head.php'); ?>
</head>

<body class="bg">
    <?php $this->load->view('partials/navbar.php'); ?>
    <h1 class="title">Inspiration</h1>

    <div>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui sed maxime impedit quasi fugiat itaque veniam. Consequatur voluptatibus veritatis et! At quam sapiente numquam fugit fugiat doloribus, minus unde deleniti iusto temporibus. Maxime saepe minus vel natus quis hic totam aliquid incidunt reprehenderit reiciendis itaque voluptatibus ipsa quae laboriosam unde quos, consectetur dignissimos voluptates! Repudiandae molestias illo ab accusantium a architecto sunt ea blanditiis repellat nam, distinctio nobis, ex quibusdam nihil soluta pariatur in fuga? Aliquam, recusandae, deserunt vel, minima eaque qui sed inventore quos in reprehenderit omnis aspernatur ab neque! Rem veritatis natus optio vel reprehenderit, mollitia corporis rerum quo nam hic eum quidem, impedit aspernatur accusantium at nihil perspiciatis fuga et dolorem? Accusantium suscipit unde adipisci aspernatur tempora ea reprehenderit? Architecto eum pariatur fuga et est dolorem sint enim assumenda omnis deserunt consectetur, molestias tenetur doloribus nulla aspernatur rerum, explicabo eos. Voluptatibus sunt, eos maxime magni voluptatum ipsa!
        </p>
    </div>

    <div class="grid-container2">
        <div class="item1">Picture1</div>
        <div class="item2">Picture2</div>
        <div class="item3">Picture3</div>
        <div class="item4">Picture4</div>
        <div class="item5">Picture5</div>
        <div class="item5">Picture6</div>
        <div class="item5">Picture7</div>
    </div>

    <div class="container-x">
        <img src="<?= base_url('assets/images/ibis-bird.jpeg') ?>" alt="my picture">
        <img src="<?= base_url('assets/images/pexels.jpeg') ?>" alt="my picture">
        <img src="<?= base_url('assets/images/pexels2.jpeg') ?>" alt="my picture">
    </div>

    <div class="grid-container">
        <div class="grid-item">Art Prints</div>
        <div class="grid-item">Canvas Prints</div>
        <div class="grid-item">Art Panels</div>
        <div class="grid-item">NEW! Custom</div>
        <div class="grid-item">Our Picks</div>
        <div class="grid-item">Wall Art Sets</div>
    </div>
    
    <?php $this->load->view('partials/footer.php'); ?>
</body>

</html>