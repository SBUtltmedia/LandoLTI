<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb6dd4e27d5697d16f6da4eca26d282f4
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'ceLTIc\\LTI\\' => 11,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ceLTIc\\LTI\\' => 
        array (
            0 => __DIR__ . '/..' . '/celtic/lti/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb6dd4e27d5697d16f6da4eca26d282f4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb6dd4e27d5697d16f6da4eca26d282f4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb6dd4e27d5697d16f6da4eca26d282f4::$classMap;

        }, null, ClassLoader::class);
    }
}