<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItaliaregSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Регионы Италии';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="italiareg-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить регион', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'region',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
