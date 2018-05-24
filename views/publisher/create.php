<?php

use yii\helpers\Html;


$this->title = 'Create Publisher';
$this->params['breadcrumbs'][] = ['label' => 'publisher', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publisher-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
