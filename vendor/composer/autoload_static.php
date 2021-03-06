<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e9b49810301d3abb2df5dec3242c433
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6e9b49810301d3abb2df5dec3242c433::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6e9b49810301d3abb2df5dec3242c433::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
