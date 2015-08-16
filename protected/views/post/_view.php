<div class="post">
    <div class="title">
        <?php echo CHtml::link(CHtml::encode($data->title), Yii::app()->baseUrl . '/post/' . $data->id); ?>
    </div>

    <div class="author">
        Posted by <?php echo $data->user->name . ' on ' . date('F j, Y', $data->created); ?>
    </div>

    <div class="content">
        <?php
        $this->beginWidget('CMarkdown', array('purifyOutput' => true));
        echo $data->content;
        $this->endWidget();
        ?>
    </div>

    <div class="nav">
        <?php echo "Comments ({$data->commentCount})"; ?> |
        Last updated on <?php echo date('F j, Y', $data->updated); ?>
    </div>
</div>
<hr>