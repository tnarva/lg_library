<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit805b69597012b722c51e96864e11ab26
{
    public static $prefixesPsr0 = array (
        'F' => 
        array (
            'FancyGuy\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/fancyguy/webroot-installer/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit805b69597012b722c51e96864e11ab26::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
