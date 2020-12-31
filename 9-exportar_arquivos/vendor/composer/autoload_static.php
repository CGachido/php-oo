<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit941a9de824c2655cd577ebfdca182537
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Spreadsheet' => 
            array (
                0 => __DIR__ . '/..' . '/pablodalloglio/spreadsheet_excel_writer',
            ),
        ),
        'P' => 
        array (
            'PHPRtfLite' => 
            array (
                0 => __DIR__ . '/..' . '/phprtflite/phprtflite/lib',
            ),
        ),
        'O' => 
        array (
            'OLE' => 
            array (
                0 => __DIR__ . '/..' . '/pablodalloglio/ole',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit941a9de824c2655cd577ebfdca182537::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit941a9de824c2655cd577ebfdca182537::$classMap;

        }, null, ClassLoader::class);
    }
}
