<?php
/* @var $this PostController */
/* @var $model Post */

$this->pageTitle = Yii::app()->name . ' - View Post';
$this->breadcrumbs = array(
    'View Post',
);
?>

    <h1><?php echo $model->title; ?></h1>
    <p><?php echo $model->content; ?></p>

    <hr>

<h3>Post Comments</h3>

<?php foreach ($model->comments as $comment) : ?>
    <p><?php echo $comment->name;?> (<?php echo $comment->email;?>)</p>
    <p><small><?php echo date('F j, Y : h:i:s', $comment->created)?>)</small></p>
    <p><?php echo $comment->content;?></p>
    <hr>
<?php endforeach ?>


<h3>Add Comments</h3>

<?php if (Yii::app()->user->hasFlash('success')): ?>

    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>

<?php endif ?>

<br>

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'create-comment-form',
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
)); ?>

<?php echo $form->errorSummary($model); ?>

<?php
    $model = new Comment();
?>

<div class="row">
    <?php echo $form->labelEx($model, 'name'); ?>
    <?php echo $form->textField($model, 'name', array('class' => 'form-control')); ?>
    <?php echo $form->error($model, 'name'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'email'); ?>
    <?php echo $form->textField($model, 'email', array('class' => 'form-control')); ?>
    <?php echo $form->error($model, 'email'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'content'); ?>
    <?php echo $form->textArea($model, 'content', array('class' => 'form-control', 'rows' => '10')); ?>
    <?php echo $form->error($model, 'content'); ?>
</div>
<br>

<div class="row buttons">
    <?php echo CHtml::submitButton('Add Comment', array('class' => 'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?>
