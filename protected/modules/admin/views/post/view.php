<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Должности'=>array('admin'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Создать должность', 'url'=>array('create')),
	array('label'=>'Обновить должность', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить должность', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Список должностей', 'url'=>array('admin')),
);
?>

<h1>Просмотр должности #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
