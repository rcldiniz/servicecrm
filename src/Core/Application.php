<?php

namespace ServiceCRM\Core;

class Application
{
    private static ?Application $instance = null;

    public static function boot(): void
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        self::$instance->register();
    }

    private function register(): void
    {
        Container::boot();

        Loader::boot();

        Hooks::boot();

        Installer::boot();

        Admin::boot();
    }
}
