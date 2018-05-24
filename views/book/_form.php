<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'publisher_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year_published')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <div>
    <?= $form->errorSummary($model); ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
