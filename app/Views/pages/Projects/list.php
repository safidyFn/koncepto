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

    <section class="py-5">
        <div class="container">
            <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button 
                        class="nav-link active" 
                        id="tous-tab" 
                        data-bs-toggle="tab" 
                        data-bs-target="#tous" 
                        type="button" 
                        role="tab" 
                        aria-controls="tous" 
                        aria-selected="true">Tous</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button 
                        class="nav-link" 
                        id="residentiel-tab" 
                        data-bs-toggle="tab" 
                        data-bs-target="#Residentiel" 
                        type="button" 
                        role="tab" 
                        aria-controls="Residentiel" 
                        aria-selected="false">Residentiel</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button 
                        class="nav-link" 
                        id="micro-architecture" 
                        data-bs-toggle="tab" 
                        data-bs-target="#micro-arch" 
                        type="button" 
                        role="tab" 
                        aria-controls="micro-arch" 
                        aria-selected="false">Micro architecture</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button 
                        class="nav-link" 
                        id="commercial-tab" 
                        data-bs-toggle="tab" 
                        data-bs-target="#commercial" 
                        type="button" 
                        role="tab" 
                        aria-controls="commercial" 
                        aria-selected="false">Commercial</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button 
                        class="nav-link" 
                        id="culturel" 
                        data-bs-toggle="tab" 
                        data-bs-target="#culturel" 
                        type="button" 
                        role="tab" 
                        aria-controls="culturel" 
                        aria-selected="false">Culturel</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button 
                        class="nav-link" 
                        id="micro-architecture" 
                        data-bs-toggle="tab" 
                        data-bs-target="#micro-arch" 
                        type="button" 
                        role="tab" 
                        aria-controls="micro-arch" 
                        aria-selected="false">Micro architecture</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div 
                        class="tab-pane fade show active" 
                        id="tous" 
                        role="tabpanel" 
                        aria-labelledby="tous-tab">Tab</div>
                    <div 
                        class="tab-pane fade" 
                        id="Residentiel" 
                        role="tabpanel" 
                        aria-labelledby="residentiel-tab">Residentiel</div>
                    <div 
                        class="tab-pane fade" 
                        id="micro-arch" 
                        role="tabpanel" 
                        aria-labelledby="micro-architecture">!!!</div>
                </div>

            </div>
        </div>
    </section>

<?php echo view('partials/footer') ?>