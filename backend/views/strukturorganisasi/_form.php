<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Strukturorganisasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="strukturorganisasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tittle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image', [])->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>