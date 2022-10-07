<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0893eacae173fdcb693bda7b5fbad6fb
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mzmatbj\\Test\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mzmatbj\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0893eacae173fdcb693bda7b5fbad6fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0893eacae173fdcb693bda7b5fbad6fb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0893eacae173fdcb693bda7b5fbad6fb::$classMap;

        }, null, ClassLoader::class);
    }
}
