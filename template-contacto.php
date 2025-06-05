<?php
/*
 * Template Name: Contacto Template
 * Template Post Type: page
 */
?>

<?php get_header('templates'); ?>
<hr class="linea-horizontal-nav">

<div class="container">
    <div class="row justify-content-center aumentable">
        <div class="col-md-8 mt-4">
            <div class="contact-form">
                <h3 class="text-center">Formulario de Contacto</h3>
                <p style=" font-family: 'Roboto', sans-serif;">¿Tienes alguna consulta o sugerencia? No dudes en escribirnos</p>
                <form id="custom-contact-form" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre <span>*</span></label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span>*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje <span>*</span></label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" id="submit-btn" class="btn btn-dark" style=" font-family: 'Bebas Neue', sans-serif;">Enviar</button>
                </form>
                <div id="form-response"></div>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
jQuery(document).ready(function($) {
    $('#custom-contact-form').on('submit', function(event) {
        event.preventDefault(); 

        var form = $(this);

        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'POST',
            data: {
                action: 'send_custom_contact_form', 
                name: $('#name').val(),
                email: $('#email').val(),
                message: $('#message').val(),
                security: '<?php echo wp_create_nonce('ajax-security-nonce'); ?>' 
            },
            beforeSend: function() {
                $('#form-response').html('Enviando mensaje...');
            },
            success: function(response) {
                
                var data = $.parseJSON(response);
                if (data.success) {
                    $('#form-response').html('<div class="alert alert-success">' + data.message + '</div>');
                    form[0].reset(); 

                   
                    alert('¡Mensaje enviado correctamente!');
                  
                    window.location.href = '<?php echo home_url(); ?>';
                } else {
                    $('#form-response').html('<div class="alert alert-danger">' + data.message + '</div>');
                }
            },
            error: function(xhr, status, error) {

                $('#form-response').html('<div class="alert alert-danger">Hubo un error. Por favor, inténtelo de nuevo más tarde.</div>');
            }
        });
    });
});
</script>




<div style="margin-top:28vh;" > 
        <?php get_footer(); ?>
    
</div>