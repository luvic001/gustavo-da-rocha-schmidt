<?php

define('ENVIRONMENT', 'development');

global $host, $ssl;

$ssl['development'] = 'http://';
$ssl['production'] = 'https://';

$host['development']['url'] = $ssl[ENVIRONMENT] . $_SERVER['HTTP_HOST'];
$host['development']['path'] = '';

$host['production']['url'] = $ssl[ENVIRONMENT] . $_SERVER['HTTP_HOST'];
$host['production']['path'] = '';

define('SITE_URL', function_exists('site_url') ? site_url() : $host[ENVIRONMENT]['url']);

// Enable Debug
define('DEBUG', true);

// Informe se o site é wordpress
define('IS_WP', true);

// Connect to DB
define('CONNECT_DB', false);

define('PATH', __DIR__);

if (!IS_WP)
{ 
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'cmp_gustavo');
}

// Google Maps
define('ENABLE_GM', false);

// Google Fonts
define('GOOGLE_FONTS', 'Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');

// Google Material Design
define('MATERIAL_DESIGN', false);

// Navigator Theme Color
define('THEME_COLOR', '#fff');

// Enable Ajax
define('USE_AJAX', true);
define('AJAX_URI', IS_WP ? admin_url('admin-ajax.php') : SITE_URL . '/backend');

// Template Directory
global $TEMPLATE_DIRECTORY, $TEMPLATE_DIRECTORY_URI, $REGISTERED_MENUS;

$TEMPLATE_DIRECTORY = IS_WP ? get_template_directory() : PATH;
$TEMPLATE_DIRECTORY_URI = IS_WP ? get_template_directory_uri() : SITE_URL;

if (IS_WP){
  // Menus
  $REGISTERED_MENUS = [
    'menu-principal' => __( ' Principal' )
  ];
}

// Extra fonts
global $load_extra_css;
// $load_extra_css = [''];

// Default Timezone: America - São Paulo
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

if (IS_WP){
  
  // get the the role object
  $editor = get_role('editor');
  // add $cap capability to this role object
  $editor->add_cap('edit_theme_options');

}

if (!defined('AUTH_SALT')){
  define('AUTH_SALT', '');
}

// MailSender
define('SMTP_HOST', 'smtp.dreamhost.com');
define('SMTP_USER', '');
define('SMTP_PASS', '');
define('SMTP_PORT', 465);
define('SMTP_FROM_NAME', '');
define('STMP_FROM_BOX', '');
define('SMTP_FROM_BOX_NAME', '');

require (PATH . '/inc/load.php');