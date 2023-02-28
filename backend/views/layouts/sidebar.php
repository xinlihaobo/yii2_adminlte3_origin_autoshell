<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=\yii\helpers\Url::home()?>" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">xxx</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../statics/images/avatar/avatar1.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info" style="color:#fff;">
	        <?=Yii::$app->user->identity->username;?>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'Dashboard',
                        'icon' => 'tachometer-alt',
                        'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'Charts', 'url' => ['dashboard/index'], 'iconStyle' => 'far'],
                            ['label' => '统计', 'iconStyle' => 'far'],
                        ]
                    ],


                    [
                        'label' => 'xx',
                        'icon' => 'flag',

                        'items' => [
                            [
                                'label' => 'xxx', 'icon' => 'file','url' => ['/xx/index'], 
                            ],

                            [
                                'label' => 'xx列表', 'icon' => 'th-list', 'url' => ['/xx/index'], 
                                'active' => Yii::$app->controller->id == "todo" 
                            ],

                            [
                                'label' => '类型列表', 'icon' => 'th', 'url' => ['/todo-type/index'],
                                'active' => Yii::$app->controller->id == "todo-type" 
                            ],

                        ]
                    ],


                    // ['label' => '', 'header' => true],
                    [
                        'label' => 'xxx',
                        'icon' => 'wrench',
                        
                        'items' => [
                            [
                                'label' => 'xx', 'icon' => 'clock','url' => ['/summary-year'], 
                                'active' => Yii::$app->controller->id == "summary-year"
                            ],

                            [
                                'label' => 'xx', 'icon' => 'th-list', 'url' => ['/summary-month'],
                                'active' => Yii::$app->controller->id == "summary-month"
                            ],

                            [
                                'label' => 'xxx', 'icon' => 'th', 'url' => ['/summary-week'],
                                'active' => Yii::$app->controller->id == "summary-week"
                            ],

                        ]
                    ],

                    ['label' => '', 'header' => true],

                    [
                        'label' => '外出管理',
                        'icon' => 'globe',

                        'items' => [
                            [
                                'label' => '旅游记录', 'icon' => 'map-marker','url' => ['/tourism'],
                                'active' => Yii::$app->controller->id == "tourism" 
                            ],

                        ]
                    ],

                    // ['label' => '', 'header' => true],
                    [
                        'label' => 'xx管理',
                        'icon' => 'film',

                        'items' => [
                            [
                                'label' => 'xx列表', 'icon' => 'video','url' => ['/movie/index'], 
                                'active' => Yii::$app->controller->id == "movie"
                            ],

                            [
                                'label' => 'xx列表', 'icon' => 'music', 'url' => ['/music/index'],
                                'active' => Yii::$app->controller->id == 'music'
                            ],
                        ]
                    ],

                    ['label' => '', 'header' => true],
                    [
                        'label' => '账号管理',
                        'icon' => 'user',

                        'items' => [
                            [
                                'label' => '账号列表', 'icon' => 'th-list','url' => ['/account/index'], 
                                'active' => Yii::$app->controller->id == "account"
                            ],

                            [
                                'label' => 'xx分类', 'icon' => 'tag', 'url' => ['/account-type/index'],
                                'active' => Yii::$app->controller->id == "account-type"
                            ],

                        ]
                    ],

                    ['label' => '', 'header' => true],


                    ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                    ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    ['label' => 'MULTI LEVEL EXAMPLE', 'header' => true],
               

                    ['label' => 'Level1'],
                    ['label' => 'LABELS', 'header' => true],
                    ['label' => 'Important', 'iconStyle' => 'far', 'iconClassAdded' => 'text-danger'],
                    ['label' => 'Warning', 'iconClass' => 'nav-icon far fa-circle text-warning'],
                    ['label' => 'Informational', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
