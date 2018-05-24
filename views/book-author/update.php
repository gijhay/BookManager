<?php

use yii\helpers\Html;

$this->title = "Update Book Author: $model->book_id";
$this->params['breadcrumbs'][] = ['label' => 'book_author', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->book_id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="book_author-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
