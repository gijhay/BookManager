<?php

use yii\helpers\Html;


$this->title = 'Create Author';

$this->params['breadcrumbs'][] = ['label' => 'author', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="author-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
