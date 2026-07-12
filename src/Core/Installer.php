<?php

namespace ServiceCRM\Core;

class Installer
{
    public static function boot(): void
    {
        register_activation_hook(
            SERVICECRM_PATH . 'servicecrm.php',
            [self::class, 'install']
        );
    }

    public static function install(): void
    {
        update_option('servicecrm_version', SERVICECRM_VERSION);
    }
}
