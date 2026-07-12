<?php
/**
 * Plugin Name: ServiceCRM
 * Plugin URI: https://servicecrm.com
 * Description: CRM Profissional para Prestadores de Serviços e Consultores.
 * Version: 1.0.0-alpha
 * Requires PHP: 8.2
 * Requires at least: 6.6
 * Author: ServiceCRM
 * Text Domain: servicecrm
 */

defined('ABSPATH') || exit;

define('SERVICECRM_VERSION', '1.0.0-alpha');
define('SERVICECRM_PATH', plugin_dir_path(__FILE__));
define('SERVICECRM_URL', plugin_dir_url(__FILE__));

if (file_exists(SERVICECRM_PATH . 'vendor/autoload.php')) {
    require SERVICECRM_PATH . 'vendor/autoload.php';
}

ServiceCRM\Core\Application::boot();
