<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
        <?php $this->renderPartial('application.views.partial.head');?>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->renderPartial('application.views.partial.menu');?>
	</div><!-- mainmenu -->
	
        <?php $this->renderPartial('application.views.partial.breadcrumbs');?>
        
	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		<?php $this->renderPartial('application.views.partial.footer');?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
