<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit805259cb3dd98a9c81b0ee4514dab5c2
{
    public static $files = array (
        '6124b4c8570aa390c21fafd04a26c69f' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/deep_copy.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'setasign\\Fpdi\\' => 14,
        ),
        'V' => 
        array (
            'Violet\\StreamingJsonEncoder\\' => 28,
        ),
        'S' => 
        array (
            'Symfony\\Contracts\\EventDispatcher\\' => 34,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Solarium\\' => 9,
            'Slim\\Csrf\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'Mpdf\\' => 5,
        ),
        'L' => 
        array (
            'League\\Event\\' => 13,
        ),
        'J' => 
        array (
            'JsonStreamingParser\\Test\\' => 25,
            'JsonStreamingParser\\' => 20,
            'JsonSchema\\' => 11,
        ),
        'D' => 
        array (
            'DeepCopy\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'setasign\\Fpdi\\' => 
        array (
            0 => __DIR__ . '/..' . '/setasign/fpdi/src',
        ),
        'Violet\\StreamingJsonEncoder\\' => 
        array (
            0 => __DIR__ . '/..' . '/violet/streaming-json-encoder/src',
        ),
        'Symfony\\Contracts\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher-contracts',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Solarium\\' => 
        array (
            0 => __DIR__ . '/..' . '/solarium/solarium/src',
        ),
        'Slim\\Csrf\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/csrf/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Mpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/mpdf/src',
        ),
        'League\\Event\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/event/src',
        ),
        'JsonStreamingParser\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/salsify/json-streaming-parser/tests',
        ),
        'JsonStreamingParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/salsify/json-streaming-parser/src',
        ),
        'JsonSchema\\' => 
        array (
            0 => __DIR__ . '/..' . '/justinrainbow/json-schema/src/JsonSchema',
        ),
        'DeepCopy\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit805259cb3dd98a9c81b0ee4514dab5c2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit805259cb3dd98a9c81b0ee4514dab5c2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}