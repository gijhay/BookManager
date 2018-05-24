<?php 

use yii\helpers\Html;


$this->title = "BOOK AUTHORS";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create a book author.</span>
<?php else: ?>
        <?= Html::a('Create Book Author', ['create'], ['class' => 'btn btn-success']) ?>
        <?php endif; ?>
    
<table class="table table-bordered">
    <tr>
        <th>Book ID</th>
        <th>Author ID</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
        <td><?= $model->book_id ?></td>
        <td><?= $model->author_id ?></td>
    </tr>
    <?php endforeach; ?>
</table>
