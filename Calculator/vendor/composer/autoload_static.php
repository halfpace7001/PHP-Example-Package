<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd0b2f412ba3548f15bd25ded7c20c7a4
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Itsystm019\\Calculator\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Itsystm019\\Calculator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd0b2f412ba3548f15bd25ded7c20c7a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd0b2f412ba3548f15bd25ded7c20c7a4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd0b2f412ba3548f15bd25ded7c20c7a4::$classMap;

        }, null, ClassLoader::class);
    }
}
