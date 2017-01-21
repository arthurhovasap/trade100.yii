<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Должности'=>array('admin'),
	'Должность'=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Создать должность', 'url'=>array('create')),
	array('label'=>'Просмотр должности', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Список должностей', 'url'=>array('admin')),
);
?>

<h1>Обновить должность <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>