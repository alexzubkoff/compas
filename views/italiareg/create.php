<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Italiareg */

$this->title = 'Create Italiareg';
$this->params['breadcrumbs'][] = ['label' => 'Italiaregs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="italiareg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
