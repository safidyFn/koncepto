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
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
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

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div>
                        <table id="tablemark" cellpadding="10">
                            <tr class="bg-marron1">
                                <td>
                                    Localisation
                                </td>
                                <td>
                                    Pont-Aven (Finistère)
                                </td>
                            </tr>
                            <tr class="bg-marron2">
                                <td>
                                Programme
                                </td>
                                <td>
                                   <p>Ressourcerie</p>
                                   <p>Bio-engrais</p>
                                   <p>Base nautique</p>
                                   <p>Hôtellerie</p>
                                </td>
                            </tr>
                            <tr class="bg-marron1">
                                <td>
                                Superficie
                                </td>
                                <td>
                                4.000 m²
                                </td>
                            </tr>
                            <tr class="bg-marron1">
                                <td>
                                Contexte
                                </td>
                                <td>
                                ENSAB - PFE
                                </td>
                            </tr>
                            <tr  class="bg-marron1">
                                <td>
                                Partenaires
                                </td>
                                <td>
                                Projets en binôme
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-7">
                    <div class="module-description">
                        <p>Le programme s’articule autour de trois axes, se proposant chacun de répondre à un des trois enjeux majeurs de la commune. La ressourcerie, en tant qu’équipement intercommunal, permet de réinsérer la commune dans son tissu géographique en favorisant la collaboration avec les villes voisines.</p>
                        <p>L’unité de production d’engrais biologique, quant à elle, encourage à la fois la diversification des secteurs économiques de la commune et l’émergence d’une économie circulaire. Enfin, le pôle touristique, avec ses hébergements et services associés, permet de pallier au manque d’infrastructures dans le domaine. Une attention particulière a été portée au traitement des espaces publics, notamment le long des 500 mètres de berge, dont l’aménagement a été guidé par une technique de dépollution écologique : la phytoremédia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php echo view('partials/footer') ?>