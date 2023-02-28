<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    // 时区设置
    'timeZone' => 'Asia/Shanghai',
    'charset' => 'utf-8',

    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],

    'modules' => [
        // 配置markdown
        'markdown' => [
            // the module class
            'class' => 'kartik\markdown\Module',
            
            // the controller action route used for markdown editor preview
            'previewAction' => '/markdown/parse/preview',
            
            // the controller action route used for downloading the markdown exported file
            'downloadAction' => '/markdown/parse/download',
            
            // the list of custom conversion patterns for post processing
            'customConversion' => [
                '<table>' => '<table class="table table-bordered table-striped">'
            ],
            
            // whether to use PHP SmartyPantsTypographer to process Markdown output
            'smartyPants' => true,
            
            // array the the internalization configuration for this module
            // 'i18n' => [
            //     'class' => 'yii\i18n\PhpMessageSource',
            //     'basePath' => '@markdown/messages',
            //     'forceTranslation' => true
            // ];        
        ]
    ],

    'components' => [
        // 配置adminlte3
        'view' => [
             'theme' => [
                 'pathMap' => [
                    // '@app/views' => '@vendor/hail812/yii2-adminlte3/src/views',
                    '@app/views' => '@app/views'
                 ],
             ],
        ],

        'request' => [
            'csrfParam' => '_csrf-backend',

            // 设定后台独有的cookie值 ########################复制backend/config/main-local.php中的cookie值到如下
            'cookieValidationKey' => 'RWuG4LkCQVeYPsaGVTZf-UBDs48lB1oQ',
        ],
        'user' => [
            // 'identityClass' => 'common\models\User',

            // 指定验证类
            'identityClass' => 'common\models\Adminuser',

            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
            'savePath' => sys_get_temp_dir(), // 设定后台独有的session
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
            'rules' => [
            ],
        ],
        
    ],
    'params' => $params,
];
