<?php
/* @var $this PostController */
/* @var $model Post */

$this->pageTitle = Yii::app()->name . ' - View Post';
$this->breadcrumbs = array(
    'View Post',
);
?>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'template'=>"{items}\n{pager}",
)); ?>

