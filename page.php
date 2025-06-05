
  <?php
$page = get_page_by_title('Una breve historia del Britpop');


if ($page) { 
?>

<section class="britpop-historia">
   
  <div class="container">
       
    <div class="row">
       
       <h3 class="titulo"><?php echo esc_html($page->post_title); ?></h3>
       <hr class="linea-horizontal">
    </div>

   <?php
$content = apply_filters('the_content', $page->post_content);


$sentences = preg_split('/(?<=[.!?])\s+/', strip_tags($content));

$total_sentences = count($sentences);
$half_sentences = ceil($total_sentences / 2);
$part1 = implode(' ', array_slice($sentences, 0, $half_sentences));
$part2 = implode(' ', array_slice($sentences, $half_sentences));
?>

<div class="row">
   <div class="col-lg-6 col-sm-12">
      <p class="aumentable"><?php echo $part1; ?></p>
   </div>
   <div class="col-lg-6 col-sm-12">
      <img id="imagen1" class="izquierda" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/oasis1.jpg" alt="oasis_wonderwall_videoclip">
   </div>
</div>

<div class="row">
   <div class="col-lg-6 col-sm-12">
      <img id="imagen2" class="derecha" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/suede.jpg" alt="suede-band">
   </div>
   <div class="col-lg-6 col-sm-12">
      <p class="aumentable"><?php echo $part2; ?></p>
   </div>
</div>

  </div>
</section>
<?php
}
?>
