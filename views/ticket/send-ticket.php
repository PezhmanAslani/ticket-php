<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Send Ticket';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="ticket-send">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
