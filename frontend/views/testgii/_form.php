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

    <?= $form->field($model, 'ngay_sinh')->textInput() ?>

    <?= $form->field($model, 'thang_sinh')->textInput() ?>

    <?= $form->field($model, 'nam_sinh')->textInput() ?>

    <?= $form->field($model, 'ho_ten')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
