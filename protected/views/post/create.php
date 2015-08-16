<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */

$this->pageTitle = Yii::app()->name . ' - Create Post';
$this->breadcrumbs = array(
    'Create Post',
);
?>

<h1>Create Post</h1>

<?php if (Yii::app()->user->hasFlash('success')): ?>

    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>

<?php endif ?>

<br>

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'create-post-form',
    'enableClientValidation' => false,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
)); ?>

<?php //echo $form->errorSummary($model); ?>

<div class="row">
    <?php echo $form->labelEx($model, 'title'); ?>
    <?php echo $form->textField($model, 'title', array('class' => 'form-control')); ?>
    <?php echo $form->error($model, 'title'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'content'); ?>
    <?php echo $form->textArea($model, 'content', array('class' => 'form-control', 'rows' => '10')); ?>
    <?php echo $form->error($model, 'content'); ?>
</div>
<br>

<div class="row buttons">
    <?php echo CHtml::submitButton('Create Post', array('class' => 'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?>
