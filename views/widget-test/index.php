<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
?>
<h1>widget-test/index</h1>

<p>
    <?php
        echo Html::a(
            'ID is =123',
            Url::to(['widget-test/index', 'id' =>'123'])
        );
        if (isset($_GET['id']))
            echo '<p>'.$_GET['id'].'</p>';
    ?>
</p>
