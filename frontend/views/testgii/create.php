<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Testgii */

$this->title = Yii::t('app', 'Create Testgii');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Testgiis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testgii-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
