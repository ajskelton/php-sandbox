<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite85fc62cf952cb367787276a179fd1fe
{
    public static $files = array (
        '6bc45d0537e6858fd179bdbc31d62c79' => __DIR__ . '/..' . '/raveren/kint/Kint.class.php',
        '47e7b45a5a2104ce756c6853c1daf8c4' => __DIR__ . '/../../..' . '/src/support/exceptions.php',
        '4cb19a1f3d532aaeb68303684db0415f' => __DIR__ . '/../../..' . '/demo.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite85fc62cf952cb367787276a179fd1fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite85fc62cf952cb367787276a179fd1fe::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
