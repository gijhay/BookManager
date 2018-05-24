<?php 

use yii\helpers\Html;


$this->title = "PUBLISHERS";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create a publisher.</span>
<?php else: ?>
        <?= Html::a('Create Publisher', ['create'], ['class' => 'btn btn-success']) ?>
        <?php endif; ?>
    
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Country</th>
        <th>Background</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->name, ['/publisher/view', 'id'=>$model->id]); ?>
        </td>
        <td><?= $model->country ?></td>
        <td><?= $model->personal_background ?></td>
    </tr>
    <?php endforeach; ?>
</table>
