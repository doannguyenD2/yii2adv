<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Testgii */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="testgii-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'ngay sinh')->textInput() ?>

    <?= $form->field($model, 'thang sinh')->textInput() ?>

    <?= $form->field($model, 'nam sinh')->textInput() ?>

    <?= $form->field($model, 'ho ten')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
