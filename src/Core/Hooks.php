<?php

namespace ServiceCRM\Core;

class Hooks
{
    public static function boot(): void
    {
        add_action('init', [self::class, 'init']);

        add_action('admin_init', [self::class, 'admin']);
    }

    public static function init(): void
    {
    }

    public static function admin(): void
    {
    }
}
