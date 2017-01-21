<?php
/* @var $this StatusController */
/* @var $model Status */

$this->breadcrumbs=array(
	'Статусы'=>array('admin'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Создать статус', 'url'=>array('create')),
	array('label'=>'Редактировать статус', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить статус', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Список статусов', 'url'=>array('admin')),
);
?>

<h1>Просмотр статуса #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
	),
)); ?>
