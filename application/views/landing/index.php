<!-- navbar -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white">
        <a class="navbar-brand" href="#"><img src="<?= base_url(); ?>assets/landing/img/astor-logo-nav.png" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Locations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <a href="<?= base_url('auth'); ?>" class="nav-link text-dark"><img src="<?= base_url(); ?>assets/landing/img/acc.png" class="mr-3" />My
                Account</a>
        </div>
    </nav>
</div>
<!-- end of navbar -->

<!-- jumbotron -->
<div class="header bg-white">
    <div class="row">
        <div class="col-7 ml-5">
            <img src="<?= base_url(); ?>assets/landing/img/mc-header.png" alt="" class="mc-header" />
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <img src="<?= base_url(); ?>assets/landing/img/mc-text-header.png" alt="" />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-outline-dark btn-order">
                        Order
                    </button>
                    <button type="button" class="btn btn-light learn-more bg-white">
                        Learn more
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of jumbotron -->

<!-- Catalogue text -->
<section class="catalogue-title">
    <div class="row mt-5 pt-5">
        <div class="col-12 text-uppercase text-center">
            <h2>Cars Catalogue</h2>
            <h3>Discover Your Future Cars</h3>
        </div>
    </div>
</section>
<!-- end of catalogue text -->

<!-- Catalogue -->
<section>
    <div class="container">
        <!-- row 1 -->
        <div class="row mt-5">
            <!-- item -->
            <div class="col-6">
                <div class="catalogue-item">
                    <div class="item-name text-center">
                        <h4>BMW M2 Competition</h4>
                    </div>
                    <figure class="figure">
                        <img src="<?= base_url(); ?>assets/landing/img/card1.png" class="figure-img img-fluid rounded" alt="BMW M2 Competition" />
                        <figcaption class="figure-caption text-center">
                            <button type="button" class="
											btn btn-outline-dark
											font-weight-bold
											btn-item
										">
                                Order
                            </button>
                            <button type="button" class="
											btn btn-outline-dark
											font-weight-bold
											btn-item
										">
                                Details
                            </button>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <!-- end of item -->
            <!-- item -->
            <div class="col-6">
                <div class="catalogue-item">
                    <div class="item-name text-center">
                        <h4>Porsche 911 Carrera T</h4>
                    </div>
                    <figure class="figure">
                        <img src="<?= base_url(); ?>assets/landing/img/card2.png" class="figure-img img-fluid rounded" alt="Porsche 911 Carrera T" />
                        <figcaption class="figure-caption text-center">
                            <button type="button" class="
											btn btn-outline-dark
											font-weight-bold
											btn-item
										">
                                Order
                            </button>
                            <button type="button" class="
											btn btn-outline-dark
											font-weight-bold
											btn-item
										">
                                Details
                            </button>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <!-- end of item -->
        </div>
        <!-- row 2 -->
        <div class="row mt-5">
            <!-- item -->
            <div class="col-6">
                <div class="catalogue-item">
                    <div class="item-name text-center">
                        <h4>Subaru WRX STI Limited</h4>
                    </div>
                    <figure class="figure">
                        <img src="<?= base_url(); ?>assets/landing/img/card3.png" class="figure-img img-fluid rounded" alt="Subaru WRX STI Limited" />
                        <figcaption class="figure-caption text-center">
                            <button type="button" class="
											btn btn-outline-dark
											font-weight-bold
											btn-item
										">
                                Order
                            </button>
                            <button type="button" class="
											btn btn-outline-dark
											font-weight-bold
											btn-item
										">
                                Details
                            </button>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <!-- end of item -->
            <!-- item -->
            <div class="col-6">
                <div class="catalogue-item">
                    <div class="item-name text-center">
                        <h4>Ford Mustang 2015</h4>
                    </div>
                    <figure class="figure">
                        <img src="<?= base_url(); ?>assets/landing/img/card4.png" class="figure-img img-fluid rounded" alt="Ford Mustang 2015 Card.png" />
                        <figcaption class="figure-caption text-center">
                            <button type="button" class="
											btn btn-outline-dark
											font-weight-bold
											btn-item
										">
                                Order
                            </button>
                            <button type="button" class="
											btn btn-outline-dark
											font-weight-bold
											btn-item
										">
                                Details
                            </button>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <!-- end of item -->
        </div>
    </div>
</section>
<!-- End of Catalogue -->

<!-- Panigation -->
<section>
    <div class="row">
        <div class="col text-center">
            <a href="#">
                <img src="<?= base_url(); ?>assets/landing/img/back.png" alt="" />
            </a>
            <a href="#">
                <button type="button" class="btn btn-outline-dark btn-pg">
                    1
                </button>
            </a>
            <a href="#">
                <button type="button" class="btn btn-outline-dark btn-pg">
                    2
                </button>
            </a>
            <a href="#">
                <img src="<?= base_url(); ?>assets/landing/img/next.png" alt="" />
            </a>
        </div>
    </div>
</section>