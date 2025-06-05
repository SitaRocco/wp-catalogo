<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Descubre lo mejor del Britpop: álbumes icónicos y el legado de este movimiento musical británico de los años 90.">

  <title><?php wp_title();?></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" rel="Stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" />
  
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  

  
  <script>
    document.addEventListener("DOMContentLoaded", () => {
    
   
    document.getElementById('aumentarTexto').addEventListener('click', function() {
        
        var textElements = document.querySelectorAll('.aumentable');
        
        textElements.forEach(function(el) {
            el.style.fontSize = '1.5em'; 
        });
    });
    
    document.getElementById('disminuirTexto').addEventListener('click', function() {
        
        var textElements = document.querySelectorAll('.aumentable');
      
        textElements.forEach(function(el) {
            el.style.fontSize = '1em'; 
        });
    });
    
     var navCollapse = document.querySelector('.navbar-collapse');

  
    window.addEventListener('scroll', function() {
        if (navCollapse.classList.contains('show')) {
            var bsCollapse = new bootstrap.Collapse(navCollapse, {
                toggle: true
            });
        }
    });
    
    document.getElementById('search-form').addEventListener('submit', function(event) {
            var searchInput = document.getElementById('search-input').value.trim();
            if (searchInput === '') {
                event.preventDefault();
              alert('Busqueda vacía, ingresa la palabra de lo que quieres buscar.');
            }
        });
        
   
});


</script>
  
  
  
  
 </head>
<body>    

<nav class="navbar navbar-expand-md ">
    <div class="container-fluid">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand d-flex align-items-center mx-4">
        <h2 class="logo">Britpop Nostalgia!</h2>
      </a>
  
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse justify-content-between " id="navbarNav">
        <ul class="navbar-nav mx-auto mb-2 mb-md-0 aumentable">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('Los 10 mejores albums')); ?>">Los 10 mejores álbums</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('Nosotros')); ?>">Nosotros</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('Contacto')); ?>">Contacto</a>
          </li>
         
        </ul>
        <button id="aumentarTexto" class="btn">A+</button>
        <button id="disminuirTexto" class="btn">A-</button>
        
        <?php get_search_form(); ?>

      </div>
    </div>
  </nav>