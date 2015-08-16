<!DOCTYPE html>
<html>
<head>
    <title><?php echo CHtml::encode(Yii::app()->name); ?> | Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->baseUrl; ?>/css/signin.css" rel="stylesheet">

</head>
<body>

<div class="row">
    <div class="container">
        <?php echo $content; ?>
    </div>
</div>

<link href="<?php echo Yii::app()->baseUrl; ?>/js/jquery.js" rel="stylesheet">
<link href="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap.min.js" rel="stylesheet">

</body>
</html>