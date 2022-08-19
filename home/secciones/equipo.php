<section class="p-t-120 p-b-30">
        <div class="container">
            <div class="section-title m-b-70">
                <h5 class="title-sub">Conoce</h5>
                <h2 class="title-1">A nuestro equipo</h2>
            </div>
            <div class="row">

            <?php 
                for ($i=0; $i < 3; $i++) { 
            ?>
                <div class="col-md-6 col-lg-4">
                    <article class="media-team">
                        <figure class="media__img-wrap">
                            <ul class="list-social list-social--light">
                                <li class="list-social__item">
                                    <a class="ic-insta" href="#">
                                        <i class="zmdi zmdi-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                            <span class="overlay"></span>
                            <img class="media__img img--rounded" src="images/team-01.jpg" alt="Brad Green" />
                        </figure>
                        <div class="media__body">
                            <h4 class="title--sm">
                                <a href="#">Brad Green</a>
                            </h4>
                            <span class="title-sub--sm">CEO - Main Architect</span>
                        </div>
                    </article>
                </div>
               <?php } ?>
                
            </div>
        </div>
    </section>