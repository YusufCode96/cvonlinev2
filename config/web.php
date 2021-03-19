<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'modules' => [
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ]       
        ],
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log','assetsAutoCompress'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'assetsAutoCompress' => [
            'class'   => '\skeeks\yii2\assetsAuto\AssetsAutoCompressComponent',
            'enabled' => false,

            'readFileTimeout' => 3,           //Time in seconds for reading each asset file

            'jsCompress'                => true,        //Enable minification js in html code
            'jsCompressFlaggedComments' => true,        //Cut comments during processing js

            'cssCompress' => true,        //Enable minification css in html code
            
            'cssFileCompile'        => true,        //Turning association css files
            'cssFileCompileByGroups' => true,       //Enables the compilation of files in groups rather than in a single file. Works only when the $cssFileCompile option is enabled
            'cssFileRemouteCompile' => false,       //Trying to get css files to which the specified path as the remote file, skchat him to her.
            'cssFileCompress'       => true,        //Enable compression and processing before being stored in the css file
            'cssFileBottom'         => false,       //Moving down the page css files
            'cssFileBottomLoadOnJs' => false,       //Transfer css file down the page and uploading them using js

            'jsFileCompile'                 => true,        //Turning association js files
            'jsFileCompileByGroups'         => true,        //Enables the compilation of files in groups rather than in a single file. Works only when the $jsFileCompile option is enabled
            'jsFileRemouteCompile'          => false,       //Trying to get a js files to which the specified path as the remote file, skchat him to her.
            'jsFileCompress'                => true,        //Enable compression and processing js before saving a file
            'jsFileCompressFlaggedComments' => true,        //Cut comments during processing js

            'noIncludeJsFilesOnPjax' => true,        //Do not connect the js files when all pjax requests when all pjax requests when enabled jsFileCompile
            'noIncludeCssFilesOnPjax' => true,        //Do not connect the css files when all pjax requests when all pjax requests when enabled cssFileCompile

            'htmlFormatter' => [
                //Enable compression html
                'class'         => 'skeeks\yii2\assetsAuto\formatters\html\TylerHtmlCompressor',
                'extra'         => false,       //use more compact algorithm
                'noComments'    => true,        //cut all the html comments
                'maxNumberRows' => 50000,       //The maximum number of rows that the formatter runs on

                //or

                //'class' => 'skeeks\yii2\assetsAuto\formatters\html\MrclayHtmlCompressor',

                //or any other your handler implements skeeks\yii2\assetsAuto\IFormatter interface

                //or false
            ],
        ],
        'assetManager' => [
    'bundles' => [
        // you can override AssetBundle configs here       
         'yii\web\JqueryAsset' => [
            'sourcePath' => null,
            'js' => [] 
        ],     
        'i18n' => [
            'translations' => [
                'yii2-ajaxcrud' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@hoaaah/ajaxcrud/messages',
                    'sourceLanguage' => 'id',
                ],
            ]
        ]   
    ],
],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'prKgQP-PrW6W6hoWziYZLxLur0EbeRN3',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'modules' => [
            'gridview' =>  [
                'class' => '\kartik\grid\Module'
            ]       
        ]
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
