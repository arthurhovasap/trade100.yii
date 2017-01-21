<?php
/* @var $this StatusController */
/* @var $model Status */

$this->breadcrumbs=array(
	'Список',
);

$this->menu=array(
	array('label'=>'Создать статус', 'url'=>array('create')),
);
?>

<h1>Список Статусов</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'status-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
