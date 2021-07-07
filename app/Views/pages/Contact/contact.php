<?php echo view('partials/linking') ?>
<?php echo view('partials/header'); ?>


<section class="baniere_home d-flex">
        <div class="row mx-0 w-100">
            <div class="col-3">
            
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center text-center">
                <div class="container_heading">
                    <h1 class="text-uppercase">Contactez-nous</h1>
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

<div class="py-5 sections">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="container-contacts">
                    <div class="contact">
                        <div class="imgcont">
                            <img src="assets/images/m-adresse.png" alt="">
                        </div>
                        <div class="txtcont">
                            Koncepto S.A.R.L.U. Lot SIAG 9 Ambondrona
                            <br>Antananarivo 101 MADAGASCAR
                        </div>
                    </div>
                    <div class="contact">
                        <div class="imgcont">
                            <img src="assets/images/m-phone.png" alt="">
                        </div>
                        <div class="txtcont">
                        +261 32 05 063 20 (Madagascar)
                        </div>
                    </div>
                    <div class="contact">
                        <div class="imgcont">
                            <img src="assets/images/m-mail.png" alt="">
                        </div>
                        <div class="txtcont">
                        koncepto-architecture@mail.com
                        </div>
                    </div>
                </div>
                <div id="FormsContact">
                    <form id="ContactForms1">
                        <fieldset>
                            <label class="mb-1 mt-3" for="nomPrenom">
                                Nom et prénom (*)
                            </label>
                            <input class="form-control" type="text" id="nomPrenom" placeholder="">
                        </fieldset>
                        <fieldset>
                            <label class="mb-1 mt-3" for="email">
                            Adresse email (*)
                            </label>
                            <input class="form-control" type="text" id="email" placeholder="">
                        </fieldset>
                        <fieldset>
                            <label class="mb-1 mt-3" for="phone">
                            Numéro de téléphone 
                            </label>
                            <input class="form-control" type="text" id="phone" placeholder="">
                        </fieldset>
                        <fieldset class="mb-3">
                            <label class="mb-1 mt-3" for="message">
                            Message (*)
                            </label>
                            <textarea 
                            name="message" id="message" class="form-control" 
                            cols="30" rows="6"></textarea>
                        </fieldset>
                        <p>(*) champ obligatoire</p>
                        <div class="input_envoi">
                            <input type="submit" value="Envoyer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    

<?php echo view('partials/footer') ?>