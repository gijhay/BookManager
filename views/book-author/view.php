<?php
use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = "Book Author: $model->book_id";
$this->params['breadcrumbs'][] = ['label'=>'book_author', 'url'=>['/book-author/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this book author?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'book_id',
        'author_id',
    ]
]);