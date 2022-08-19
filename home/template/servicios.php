<section class="wrap wrap--w1790 p-b-75">
            <div class="section-title m-b-70">
                <h5 class="title-sub">todos nuestros</h5>
                <h2 class="title-1">Servicios</h2>
            </div>
            <div class="container-fluid">
                <div class="slick-wrap slick-project js-slick-wrapper" data-slick-xs="1" data-slick-sm="1" data-slick-md="3" data-slick-lg="4" data-slick-xl="4" data-slick-dots="false" data-slick-customnav="true" data-slick-autoplay="true">
                    <div class="slick-wrap-content">
                        <div class="slick-content js-slick-content">

                        
                        <?php 
                        
                            for ($i=0; $i < 4 ; $i++) { 
                        ?>
                            <div class="slick-item">
                                <article class="media media-project">
                                    <figure class="media__img">
                                        <img src="images/project-32.jpg" alt="Skyline" />
                                    </figure>
                                    <div class="bg-overlay"></div>
                                    <span class="line"></span>
                                    <span class="line line--bottom"></span>
                                    <div class="media__body">
                                        <h3 class="title">
                                            <a href="project-detail-1.html">prueba</a>
                                        </h3>
                                        <div class="address">Michigan, USA</div>
                                    </div>
                                </article>
                            </div>

                            <?php } ?>
                        </div>
                    </div>
                    <div class="slick__nav arrows-1">
                        <i class="slick-prev slick-arrow js-slick-prev ti-angle-left"></i>
                        <i class="slick-next slick-arrow js-slick-next ti-angle-right"></i>
                    </div>
                </div>
            </div>
        </section>