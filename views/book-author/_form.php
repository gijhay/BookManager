<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="book_author-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'book_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author_id')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <div>
    <?= $form->errorSummary($model); ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
