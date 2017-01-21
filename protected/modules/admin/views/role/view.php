<?php
/* @var $this RoleController */
/* @var $model Role */

$this->breadcrumbs=array(
	'Роли'=>array('admin'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Создать роль', 'url'=>array('create')),
	array('label'=>'Обновить роль', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить роль', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Список ролей', 'url'=>array('admin')),
);
?>

<h1>Просмотр роля #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'score',
	),
)); ?>
