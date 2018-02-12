<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <?php if(!Yii::$app->user->isGuest): ?>
                    <p>Администратор</p>
                <?php endif;?>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>




        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Админ панель', 'options' => ['class' => 'header']],

                                [
                                    'label' => 'Главная',
                                    'url' => ['#'],
                                    'items' => [
                                        [
                                            'label' => 'Выставка',
                                            'url' => ['/admin/headerex/view?id=1'],

                                        ],
                                        [
                                            'label' => 'Банер на фоне',
                                            'url' => ['/admin/headersl/view?id=1'],

                                        ],]
                                ],
                                ['label' => 'О выставке', 'url' => ['/admin/about/view?id=1'],],
                                [
                                    'label' => 'Судьи и награды',
                                    'url' => ['#'],
                                    'items' => [
                                        [
                                            'label' => 'Судейский состав',
                                            'url' => ['/admin/judges/index'],

                                        ],
                                        [
                                            'label' => 'Призовой фонд',
                                            'url' => ['/admin/fond/index'],

                                        ],]
                                ],
                                ['label' => 'Стоимость участия', 'url' => ['/admin/cost/index'],],
                                ['label' => 'План-схема зала', 'url' => ['/admin/scheme/view?id=1'],],
                                [
                                    'label' => 'Программа',
                                    'url' => ['#'],
                                    'items' => [
                                        [
                                            'label' => 'Расписание',
                                            'url' => ['/admin/programm/index'],

                                        ],
                                        [
                                            'label' => 'Реклама',
                                            'url' => ['/admin/headersl1/view?id=1'],

                                        ],]
                                ],

                                ['label' => 'Победители', 'url' => ['/admin/cats/index'],],
                                ['label' => 'Организаторы', 'url' => ['/admin/organizers/index'],],
                                ['label' => 'Партнеры', 'url' => ['/admin/slider/view?id=1'],],
                                ['label' => 'Контакты', 'url' => ['/admin/contacts/view?id=1'],],
                            ]
                        ],
                    ['label' => 'Блог', 'url' => ['/admin/blog/index'],]

        ) ?>
                <div class="menu-list">
                    <ul class="nav navbar-nav auth">
                        <?php if(Yii::$app->user->isGuest):?>
                            <li><a href="<?= \yii\helpers\Url::to(['auth/login'])?>">Login</a></li>
                            <li><a href="<?= \yii\helpers\Url::to(['auth/signup'])?>">Register</a></li>
                        <?php else: ?>
                            <?= \yii\helpers\Html::beginForm(['/auth/logout'], 'post')
                            . \yii\helpers\Html::submitButton(
                                'Выйти (' . Yii::$app->user->identity->name .')',
                                ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                            )
                            . \yii\helpers\Html::endForm() ?>
                        <?php endif;?>
                    </ul>
                </div>

    </section>

</aside>
