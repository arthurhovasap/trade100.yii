<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Должности'=>array('admin'),
	'Управлять',
);

$this->menu=array(
	array('label'=>'Создать должность', 'url'=>array('create')),
);
?>

<h1>Список должностей</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'post-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
