<?php
/* @var $this RoleController */
/* @var $model Role */

$this->breadcrumbs=array(
	'Роли'=>array('admin'),
	'Список',
);

$this->menu=array(
	array('label'=>'Создать роль', 'url'=>array('create')),
);
?>

<h1>Управлять ролями</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'role-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'description',
		'score',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
