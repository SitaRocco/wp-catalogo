<?php
/*
 * Template Name: Britpop Template
 * Template Post Type: page
 */
?>

<?php get_header('templates'); ?>
<hr class="linea-horizontal-nav">
<section class="best-albums">
    <div class="container">
        <div class="row">
            <h3>Los 10 mejores álbums</h3>
            <hr class="linea-horizontal">
        </div>
        <div class="row">
            <div class="col">
                <p class="aumentable">
                    Aquí te presentamos un ranking con los 10 mejores álbums de Britpop que siguen siendo populares en todo el mundo. Estos capturan la esencia de este género que dominó los años 90, con sus melodías pegajosas, solos de guitarra y voces memorables.
                </p>
            </div>
        </div>
    </div>
    <?php
    $page = get_page_by_title('Los 10 mejores albums');

    if ($page) :
    ?>
<div class="container">
    <div class="card">
        <div class="card-body bg-light">
            <div class="row">
                <h2 class="album-title"><?php echo esc_html($page->the_title); ?></h2>
               <div class="col-md-1">
                    <?php
                    if (has_post_thumbnail($page->ID)) {
                        echo get_the_post_thumbnail($page->ID, 'large', ['class' => 'img-fluid ', 'alt' => esc_attr($page->the_title)]);
                    }
                    ?>
                <a href="<?php echo esc_url(get_permalink($page->ID)); ?>"></a>
                </div>
                
                <div class="col-md-10 aumentable">
                    <p ><?php echo apply_filters('the_content', $page->post_content); ?></p>
                </div>
            </div>
        </div>
    </div>
   <?php
    else :
        echo '<div class="container"><p>No se encontró la página "Los 10 mejores álbumes".</p></div>';
    endif;
    ?>
</div>
</section>

<div class="container" id="home-button">
    <div class="row">
        <div class="col text-center mt-3">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-dark">Volver a Inicio</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>

