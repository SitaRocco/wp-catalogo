<?php get_header(); ?>


<section class="britpop-band">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'category_name' => 'britpop_band_carousel', 
      );
      $query = new WP_Query($args);
      $indicator_index = 0;

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          ?>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $indicator_index; ?>" class="<?php echo ($indicator_index === 0) ? 'active' : ''; ?>" aria-label="Slide <?php echo ($indicator_index + 1); ?>"></button>
          <?php
          $indicator_index++;
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
    <div class="carousel-inner">
      <div class="britpop">
        <h1>BRITPOP</h1>
      </div>
      <?php
      $query = new WP_Query($args);
      $slide_index = 0;

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          ?>
          <div class="carousel-item <?php echo ($slide_index === 0) ? 'active' : ''; ?>">
            <?php if (get_field('imagen_banda')) : ?>
            <div class="band-image">
              <img src="<?php the_field('imagen_banda'); ?>" class="w-100 h-100 img-fluid " alt="Imagen de banda">
              </div>
            <?php endif; ?>
            <div class="carousel-caption d-none d-md-block">
              <?php if (get_field('nombre_banda')) : ?>
                <div class="title_band">
                  <h3><?php the_field('nombre_banda'); ?></h3>
                </div>
              <?php endif; ?>
            </div>
          </div>
          <?php
          $slide_index++;
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<?php include ('page.php'); ?>


 <section class="britpop-top-artists">
    <div class="container">
        <div class="row">
            <h3 class="titulo">Top artistas</h3>
            <hr class="linea-horizontal">
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">

            <?php
           
            $args = array(
                'post_type' => 'post', 
                'posts_per_page' => -1, 
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>

                    <div class="col-md-4 img-container">
                        <div class="image-wrapper">
                            <?php if (get_field('imagen')) : ?>
                                <img src="<?php the_field('imagen'); ?>" class="img-fluid" id="<?php the_field('titulo'); ?>" onmouseover="addBlur(this)" onmouseout="removeBlur(this)">
                            <?php endif; ?>
                        </div>
                        <?php if (get_field('enlace')) : ?>
                            <iframe id= "frame" src="<?php the_field('enlace'); ?>" width="100%" height="352" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                        <?php endif; ?>
                    </div>

            <?php
                endwhile;
                wp_reset_postdata(); 
            else :
               
                echo '<p>No hay entradas disponibles con la categoría "top_artistas".</p>';
            endif;
            ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
