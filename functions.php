<?php

global $site;

$site = [
    'brand' => 'Nobile Constructora',
    'hero_title' => 'Nobile Constructora',
    'hero_subtitle' => 'Diseño, ejecucion y direccion de proyectos con una presencia que transmite solidez y alto nivel.',
    'about_title' => 'Construimos confianza antes que metros cuadrados',
    'about_text' => 'Nobile Constructora es una firma enfocada en proyectos residenciales, comerciales y corporativos de alta exigencia. Nuestro lenguaje visual y nuestro servicio comunican precision, respaldo tecnico y una ejecucion capaz de elevar el valor de cada inversion.',
    'project_featured_title' => 'Shoreline',
    'project_featured_text' => 'Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!',
    'project_one_title' => 'Residencial Premium',
    'project_one_text' => 'Diseñamos y ejecutamos residencias con enfoque en valor patrimonial, detalle arquitectonico y acabados de alto nivel.',
    'project_two_title' => 'Obra Corporativa',
    'project_two_text' => 'Desarrollamos espacios comerciales y corporativos con cronogramas claros, supervision estricta y presencia profesional.',
    'project_three_title' => 'Gestion Integral',
    'project_three_text' => 'Coordinamos presupuesto, supervision, permisos y direccion tecnica para entregar proyectos con orden y confianza.',
    'signup_title' => 'Subscribe to receive updates!',
    'address' => 'Santa Ana, San Jose, Costa Rica',
    'email' => 'proyectos@nobileconstructora.com',
    'phone1' => '(+506) 7200-3300',
    'phone2' => '(+506) 7200-4400'
];

if (file_exists(get_template_directory() . '/config/config.php')) {
    require_once get_template_directory() . '/config/config.php';
}

if (file_exists(get_template_directory() . '/functions/functions.php')) {
    require_once get_template_directory() . '/functions/functions.php';
}

function lanzah_enqueue_assets() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');
    wp_enqueue_style('lanzah-styles', get_template_directory_uri() . '/assets/css/styles.css', array('bootstrap-css'), '1.0');
    wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/releases/v6.3.0/js/all.js', array(), '6.3.0', false);
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
    wp_enqueue_script('lanzah-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('bootstrap-bundle'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'lanzah_enqueue_assets');
