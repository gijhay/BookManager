<?php

use yii\helpers\Html;


$this->title = 'Create Book Author';
$this->params['breadcrumbs'][] = ['label' => 'book_author', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book_author-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
