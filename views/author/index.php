<?php 

use yii\helpers\Html;


$this->title = "AUTHORS";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create an author.</span>
<?php else: ?>
        <?= Html::a('Create Author', ['create'], ['class' => 'btn btn-success']) ?>
        <?php endif; ?>
    
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Personal Background</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>

<td>
            <?= Html::a($model->name, ['/author/view', 'id'=>$model->id]); ?>
        </td>     
        <td><?= $model->address ?></td>
        <td><?= $model->personal_background ?></td>
    </tr>
    <?php endforeach; ?>
</table>
