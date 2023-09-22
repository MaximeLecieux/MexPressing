<?php
    require_once('templates/header.php');
?>

<div class="container">
    <main class="text-center">
        <section class="my-5">
            <div class="row flex-lg-row-reverse align-items-center justify-content-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6" >
                    <img src="assets/images/team.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Mex'Pressing</h1>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptas recusandae magni praesentium minima iusto explicabo incidunt temporibus ipsam quaerat perferendis soluta nesciunt, voluptates ab quia? Obcaecati officiis vero culpa!
                    </p>
                </div>
            </div>
        </section>
        <section class="my-5">
            <h2>Galerie photo</h2>
            <div class="p-4 p-md-5 mb-4">
                <div id="carouselInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="assets/images/locaux.jpg" class="d-block w-100" alt="assets\images\locaux.jpg">
                        </div>
                        <div id="carousel">

                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </section>
        <section>
            <h2>Carte des tarifs & prestation</h2>
            <div id="card" class="masonry-container">

            </div>
        </section>
        <section class="my-5">
            <div class="row">
                <div class="col-12 col-lg-6 mb-3">
                    <h2>Nos horaires d'ouverture</h2>
                    <div class="justify-content-center">
                        <ul class="row justify-content-center p-0" id="schedule">

                        </ul> 
                    </div>
                </div>
                <div class="col-12 col-lg-6 mb-3">
                    <h2>Nos coordonnées</h2>
                    <p>Mex'Pressing</p>
                    <p>9 Rue Pierre Bernin, 01800 Meximieux</p>
                    <a href="tel:0427500175">Tel : 04 27 50 01 75</a>
                    <div class="ratio ratio-16x9 mt-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2776.3875145027714!2d5.187758012270832!3d45.90356160389546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4b252441c378f%3A0x7453ad6d64caf37c!2sMex&#39;pressing!5e0!3m2!1sfr!2sfr!4v1686579366743!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                            </iframe>                    
                    </div>
                </div>
        </section>
    </main>
</div>

<script src="assets/script/schedule/getHoraires.js"></script>
<script src="assets/script/article/getCategories.js"></script>
<script src="assets/script/article/getArticle.js"></script>
<script src="assets/script/article/setArticlesInFrontPage.js"></script>
<script src="assets/script/picture/getPicture.js"></script>

<?php
    require_once('templates/footer.php');
?>