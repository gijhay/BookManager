<?php
use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = "Book: $model->title";
$this->params['breadcrumbs'][] = ['label'=>'book', 'url'=>['/book/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this book?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'publisher_id',
        'title',
        'genre',
        'year_published',
    ]
]);