<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $model->search(),
    'htmlOptions' => array('style' => 'width:640px'),
    'pager' => array('maxButtonCount' => '5',),
    'filter' => $model,
    'columns' => array(
        array(
            'name' => 'title',
            'type' => 'raw',
            'value' => 'CHtml::link(CHtml::encode($data->title), Yii::app()->baseUrl . \'/post/\' . $data->id);'
        ),
        array(
            'name' => 'user.name',
            'type' => 'raw',
            'value' => 'CHtml::encode($data->user->name)'
        ),
        array(
            'class' => 'CButtonColumn',
            'viewButtonUrl' => '$this->grid->controller->createUrl("view", array("id"=>$data->id))',
            //'updateButtonUrl' => '$this->grid->controller->createUrl("update", array("id"=>$data->id))',
            'deleteButtonUrl' => '$this->grid->controller->createUrl("delete", array("id"=>$data->id))',
            'deleteConfirmation' => Yii::t('ui', 'Are you sure to delete this item?'),
            'buttons' => array(
                'update' => array(
                    'visible' => 'false',
                ),
                'view' => array(
                    'visible' => 'true',
                ),
                'delete' => array(
                    'visible' => 'true',
                ),
            ),
        ),
    ),

));