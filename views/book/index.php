<?php 

use yii\helpers\Html;


$this->title = "BOOKS";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create a book.</span>
<?php else: ?>
        <?= Html::a('Create Book', ['create'], ['class' => 'btn btn-success']) ?>
        <?php endif; ?>
    
<table class="table table-bordered">
    <tr>
        <th>Publisher ID</th>
        <th>Title</th>
        <th>Genre</th>
        <th>Year Published</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    
        <td><?= $model->publisher_id ?></td>
        <td>
        <?= Html::a($model->title, ['/book/view', 'id'=>$model->id]); ?>
        </td> 
        <td><?= $model->genre ?></td>
        <td><?= $model->year_published ?></td>
    </tr>
    <?php endforeach; ?>
</table>
