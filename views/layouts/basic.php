<?php
	use app\assets\AppAsset;
	// @var $content string
	// @var $this \yii\web\View
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
	<p>Шапка</p>
	<?= $content ?>
	<p>Подвал</p>
	<?php $this->endBody(); ?>
</body>
</html>
<?php
	$this->endPage();
?>