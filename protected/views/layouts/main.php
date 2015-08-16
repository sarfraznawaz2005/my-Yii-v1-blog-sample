<?php /* @var $this Controller */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?php echo CHtml::encode(Yii::app()->name); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->baseUrl; ?>/css/main.css" rel="stylesheet">
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="<?php echo Yii::app()->baseUrl; ?>">Home</a>
            <a class="blog-nav-item" href="<?php echo Yii::app()->baseUrl; ?>/site/page/view/about">About</a>

            <?php if (!Yii::app()->user->isGuest): ?>
                <a class="blog-nav-item pull-right" href="<?php echo Yii::app()->baseUrl; ?>/logout">Logout</a>
            <?php else: ?>
                <a class="blog-nav-item pull-right" href="<?php echo Yii::app()->baseUrl; ?>/login">Login</a>
            <?php endif; ?>

        </nav>
    </div>
</div>

<div class="container">

    <?php if(isset($this->breadcrumbs)):?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
        )); ?><!-- breadcrumbs -->
    <?php endif?>

    <div class="blog-header">
        <h1 class="blog-title"><?php echo CHtml::encode(Yii::app()->name); ?></h1>

        <p class="lead blog-description">Exploring Yii</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">
            <?php echo $content; ?>
        </div>
        <!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">

            <?php if (!Yii::app()->user->isGuest): ?>
                <div class="sidebar-module">
                    <h4>Manage Posts</h4>
                    <ol class="list-unstyled">
                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/post/create">Create Post</a></li>
                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/post/manage">Manage Posts</a></li>
                    </ol>
                </div>
            <?php endif; ?>

            <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>

                <p>A sample blog created with Yii to explore about it.</p>
            </div>
            <div class="sidebar-module">
                <h4>Recent Posts</h4>
                <ol class="list-unstyled">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                </ol>
            </div>
        </div>
        <!-- /.blog-sidebar -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<br><br>

<footer class="blog-footer">
    <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a
            href="https://twitter.com/mdo">@mdo</a>.</p>
</footer>

<link href="<?php echo Yii::app()->baseUrl; ?>/js/jquery.js" rel="stylesheet">
<link href="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap.min.js" rel="stylesheet">

</body>
</html>

