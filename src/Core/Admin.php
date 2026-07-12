<?php

namespace ServiceCRM\Core;

class Admin
{
    public static function boot(): void
    {
        add_action('admin_menu', [self::class, 'menu']);
    }

    public static function menu(): void
    {
        add_menu_page(
            'ServiceCRM',
            'ServiceCRM',
            'manage_options',
            'servicecrm',
            [self::class, 'dashboard'],
            'dashicons-groups',
            26
        );
    }

    public static function dashboard(): void
    {
        echo '<div class="wrap">';
        echo '<h1>ServiceCRM</h1>';
        echo '<p>CRM Profissional para Prestadores de Serviços.</p>';
        echo '</div>';
    }
}
