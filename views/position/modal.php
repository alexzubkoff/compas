<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model app\models\Position */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="position-form">
    
                <?php 
                Modal::begin([
                    'header' => '<h2>Position create </h2>',
                    'toggleButton' => [
                    'label' => 'click me',
                    'tag' => 'button',
                    'class' => 'btn btn-success'
                    ],
                    ]);
                 ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
     <?php Modal::end();?>

</div>