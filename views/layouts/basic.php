<?php
	use app\assets\AppAsset;
	use yii\bootstrap\NavBar;
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;
    use yii\bootstrap\Nav;
    use yii\bootstrap\Modal;
    /*
	@var $content string
	@var $this \yii\web\View
    */
	AppAsset::register($this);
	$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<title><?= Yii::$app->name ?></title>
	<?php $this->head(); ?>
</head>
<body>
	<?php $this->beginBody(); ?>
        <div class="wrap">
            <?php
                NavBar::begin(
                    [
                        'brandLabel' => 'test app',
                    ]
                );
                ActiveForm::begin(
                    [
                        'action' => ['/найти'],
                        'method' => 'get',
                        'options' =>
                        ['class' => 'navbar-form navbar-right']
                    ]
                );
                echo '<div class="input-group input-group-sm">';
                echo Html::input(
                    'type: text',
                    'search',
                    '',
                    [
                        'placeholder' => 'Search...',
                        'class' => 'form-control'
                    ]
                );
                echo '<span class="input-group-btn">';
                echo Html::submitButton(
                    '<span class="glyphicon glyphicon-search"></span>',
                    [
                        'class' => 'btn btn-success',
                        'onClick' => 'window.location.href = this.form.action + "-" + this.form.search.value.replace(/[^\w\а-яё\А-ЯЁ]+/g, "_") + ".html";'
                    ]
                );
                echo '</span></div>';
                ActiveForm::end();
                echo Nav::widget([
                    'items' => [
                        [
                            'label' => 'Main <span class="glyphicon glyphicon-home"></span>',
                            'url' => ['main/index']
                        ],
                        '<li><a data-toggle="modal" data-target="#modal" style="cursor: pointer">Обо мне <span class="glyphicon glyphicon-question-sign"></span></a></li>',
                        [
                            'label' => 'built-in-box <span class="glyphicon glyphicon-inbox"></span>',
                            'items' => [
                                '<li class="dropdown-header">Extension</li>',
                                '<li class="divider"></li>',
                                [
                                    'label' => 'go to ...',
                                    'url' => ['widget-test/index']
                                ]
                            ]
                        ]
                    ],
                    'encodeLabels' => false,
                    'options' => [
                        'class' => 'navbar-nav navbar-right'
                    ]
                ]);
                Modal::begin([
                    'header' => '<h2>Shustik</h2>',
                    'id' => 'modal'
                ]);
                echo 'Продвинутый web разработчик';
                Modal::end();
                NavBar::end();
            ?>
            <div class="container">
                <?= $content ?>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <span class="badge">
                    <span class="glyphicon glyphicon-copyright-mark"></span> Shustik <?= date('Y') ?>
                </span>
            </div>
        </footer>
	<?php $this->endBody(); ?>
</body>
</html>
<?php
	$this->endPage();
?>