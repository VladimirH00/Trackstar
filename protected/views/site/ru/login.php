<?php
$this->pageTitle=Yii::app()->name.' - Логин';
$this->breadcrumbs=array(
    'Логин',
);
?>

<h1>Логин</h1>

<p>Пожалуйста, заполните следующую форму с вашими учетными данными для входа:</p>

<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableAjaxValidation'=>true,
    )); ?>

    <p class="note">Поля со <span class="required">*</span> требуется заполнить.</p>

    <div class="row">
        <?php echo $form->labelEx($model,'username'); ?>
        <?php echo $form->textField($model,'username'); ?>
        <?php echo $form->error($model,'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password'); ?>
        <?php echo $form->error($model,'password'); ?>

    </div>

    <div class="row rememberMe">
        <?php echo $form->checkBox($model,'rememberMe'); ?>
        <?php echo $form->label($model,'rememberMe'); ?>
        <?php echo $form->error($model,'rememberMe'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Логин'); ?>
    </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->