<?php
/*
 * Template Name: Nosotros Template
 * Template Post Type: page
 */
?>

<?php get_header('templates'); ?>
<hr class="linea-horizontal-nav">

<section class="nosotros-page">
<div class="container">
    <?php
    
    $page_title = 'Nosotros'; 
    $page = get_page_by_title($page_title);

    if ($page) :
        ?>
        <div class="row">
            <h3><?php echo esc_html($page->post_title); ?></h3>
            <hr class="linea-horizontal-nosotros">
        </div>

        <div class="row aumentable">
            <div class="col">
                <p>
                    <?php echo apply_filters('the_content', $page->post_content); ?>
                </p>
            </div>
        </div>

  <div class="row justify-content-center mt-5">
            <div class="col-md-8 text-center">
                
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/britpop-collage.jpg" class="img-fluid" alt="britpop-collage-band">
               
            </div>
        </div>
    <?php endif; ?>
</div>
</section>

 
<?php get_footer(); ?>
