<section class="wrap wrap--w1790 p-b-75">
    <div class="section-title m-b-70">
        <h5 class="title-sub">todos nuestros</h5>
        <h2 class="title-1">Servicios</h2>
    </div>
   
</section>

<section class="section p-b-120">
    <div class="container">
        <div class="row gutter-xl">

        <?php 
        
        foreach (mostrar_servicio($conn) as $k => $v) {
            echo "
                        <div class='col-md-6'>
                        <article class='media media-project m-b-50'>
                            <figure class='media__img'>
                                <img src='".$v['belma_imagen']."' alt='Skyline'>
                            </figure>
                            <div class='bg-overlay'></div>
                            <span class='line'></span>
                            <span class='line line--bottom'></span>
                            <div class='media__body'>
                                <h3 class='title'>
                                    <a href='#'>".utf8_decode($v['belma_servicio'])."</a>
                                </h3>
                                <div class='address'>BEL & MA S.A.C</div>
                            </div>
                        </article>
                    </div>
                    ";
        }
        
        ?>
        </div>
        
    </div>
</section>