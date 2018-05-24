<?php
use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = "Author: $model->name";
$this->params['breadcrumbs'][] = ['label'=>'author', 'url'=>['/author/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this author?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        'address',
        'personal_background',
    ]
]);