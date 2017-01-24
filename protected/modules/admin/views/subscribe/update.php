<?php
/* @var $this SubscribeController */
/* @var $model Subscribe */

$this->breadcrumbs=array(
	'Subscribes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Просмотр подпищхика', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Список подпищхиков', 'url'=>array('admin')),
);
?>

<h1>Update Subscribe <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>