<?php echo view('partials/linking') ?>
<?php echo view('partials/header'); ?>
<section class="baniere_home d-flex">
        <div class="row mx-0 w-100">
            <div class="col-3">
            
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center text-center">
                <div class="container_heading">
                    <h1 class="text-uppercase">Projets</h1>
                </div>
            </div>
            <div class="col-3 konceptors">
                <div class="logo_RS">
                    <img src="assets/images/Logo.png" width="350" alt="Logo Koncepto">
                </div>
                <div class="reseau_sociaux_koncepto">
                    <ul class="list_rs list-unstyled">
                        <li>
                            <a href="#" data="whatsapp"></a>
                        </li>
                        <li>
                            <a href="#" data="facebook"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <div class="module-slider">
                        <h2 class="title_pages mb-4">PONT-AVEN</h2>
                        <p>La valorisation des déchets au coeur de la mutation du territoire</p>
                    </div>
                </div>
            </div>
            <div id="carouselArcticles" class="carouselProject carousel carousel-fade slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                            <div>
                                    <img src="assets/images/structure.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                            <div>
                                    <img src="assets/images/structure.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <img src="assets/images/structure.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselArcticles" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                    <img src="assets/images/next.png" alt="">
                </span>
            </a>
            <a class="carousel-control-next" href="#carouselArcticles" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                        <img src="assets/images/next.png" alt="">
                </span>
            </a>
        </div>
        </div>
    </section>

<?php echo view('partials/footer') ?>