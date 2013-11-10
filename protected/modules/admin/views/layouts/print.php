<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/public/<?php echo($this->getModule()->getId()); ?>/css/blueprint/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/public/<?php echo($this->getModule()->getId()); ?>/css/blueprint/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/public/<?php echo($this->getModule()->getId()); ?>/css/blueprint/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/public/<?php echo($this->getModule()->getId()); ?>/css/custom/form.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/public/<?php echo($this->getModule()->getId()); ?>/css/custom/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/public/<?php echo($this->getModule()->getId()); ?>/css/custom/menu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/public/<?php echo($this->getModule()->getId()); ?>/css/custom/pager.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/public/<?php echo($this->getModule()->getId()); ?>/css/custom/dropDownMenu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/public/<?php echo($this->getModule()->getId()); ?>/css/datagrid/print/style.css" />
	
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/<?php echo($this->getModule()->getId()); ?>/js/main.js" type="text/javascript"></script>
    
	<title><?php echo CHtml::encode(Yii::app()->name); ?></title>
</head>

<body>

<!-- PÁGINA -->
<div class="container" id="page">
    
    <div id="content">
            
		<?php echo($this->renderPartial('/shared/_messages')); ?>

		<?php echo $content; ?>

	</div>
    <!-- FIM: CONTEÚDO -->

</div>
<!-- FIM: PÁGINA -->

</body>
</html>