<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbdae2773151a70b59ec709800b5ed98e
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jo\\SolidGestionEmployes\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jo\\SolidGestionEmployes\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbdae2773151a70b59ec709800b5ed98e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbdae2773151a70b59ec709800b5ed98e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbdae2773151a70b59ec709800b5ed98e::$classMap;

        }, null, ClassLoader::class);
    }
}
