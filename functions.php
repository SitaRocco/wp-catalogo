<?php
add_action('wp_ajax_send_custom_contact_form', 'send_custom_contact_form');
add_action('wp_ajax_nopriv_send_custom_contact_form', 'send_custom_contact_form');

function send_custom_contact_form() {
    check_ajax_referer('ajax-security-nonce', 'security');

  
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    
    $to = 'britpop.nostalgia@gmail.com';

  
    $subject = 'Nuevo mensaje desde el formulario de contacto';

  
    $content = "Nombre: $name\n";
    $content .= "Email: $email\n\n";
    $content .= "Mensaje:\n$message\n";

  
    $mail_sent = wp_mail($to, $subject, $content);

    if ($mail_sent) {
        $response = array(
            'success' => true,
            'message' => '¡Mensaje enviado correctamente!'
        );
    } else {
        $response = array(
            'success' => false,
            'message' => 'Hubo un problema al enviar el mensaje. Por favor, inténtelo de nuevo.'
        );
    }

    echo json_encode($response);

    wp_die();
}

function custom_excerpt_length($length) {
    return 8;
}
add_filter('excerpt_length', 'custom_excerpt_length');

?>