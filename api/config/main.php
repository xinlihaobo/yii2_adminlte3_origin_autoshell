<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'api\controllers',
    'bootstrap' => ['log'],
   

    // 添加
    'modules' => [
        'v1' => [
            'class' => 'api\modules\v1\Module',
        ],
    ],


    'components' => [
        'request' => [
            'csrfParam' => '_csrf-api',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-api', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the api
            'name' => 'advanced-api',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,

            // 添加
            'enableStrictParsing' => true,

            'rules' => [
                
                // 添加
                [
                    'class' => 'yii\rest\UrlRule',

                    // 'pluralize' => false,    // 设置为false，就可以去掉复数形式

                    'controller' => [
                        'v1/books',
                        
                    ],

                    'extraPatterns' => [
                        'GET send-email' => 'send-email'
                    ],
                ],

            ],
        ],
        
    ],
    'params' => $params,
];
