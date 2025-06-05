<?php get_header('templates'); ?>
<hr class="linea-horizontal-nav">

<div class="wrapper  ">
    <div class="container mb-4"> 
        <div class="row  ">

            <section class="busqueda  col-md-8 offset-md-2" > 
                <div class="card aumentable " style="margin-top:8vh; margin-bottom:31vh;">
                    <div class="card-body ">
                        <?php
                        $search_query = get_search_query();

                        $query = new WP_Query(array(
                            'post_type' => 'page',
                            's' => $search_query,
                            'post_name__in' => array('nosotros', 'contacto', 'los-10-mejores-albums')
                        ));

                        if ($query->have_posts()) : ?>
                         <div style="margin-top:3vh;">
                            <h3>Resultados de la búsqueda:</h3>
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <h3><?php the_title(); ?></h3>
                                <p class="extracto"><?php the_excerpt(); ?></p>
                                <div class="container-fluid" id="home-button" style="max-width: 800px; margin: 0 auto;"> 
                                 <div class="row">
                                <div class="col text-center mt-3">
                                <a href="<?php the_permalink(); ?>" class="btn btn-dark mb-3">Leer más</a>
                                </div>
                                 </div>
                                 </div>
                                 </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <h3 class="text-center">Página no encontrada</h3>
                            <a href="<?php echo home_url(); ?>">
                                <img src="https://media1.giphy.com/media/g01ZnwAUvutuK8GIQn/giphy.gif?cid=6c09b952zy2vhjtnd357ha2i7v5dimnc9x6r2fc8xeq42q3c&ep=v1_gifs_search&rid=giphy.gif&ct=g" alt="Pulp Fiction GIF" style="width:100%;height:auto;">
                            </a>
                        <?php endif;

                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <div class="sticky-footer"> 
        <?php get_footer(); ?>
    </div>
</div>
