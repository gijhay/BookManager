<?php

use yii\helpers\Html;


$this->title = 'Create Book';
$this->params['breadcrumbs'][] = ['label' => 'book', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
