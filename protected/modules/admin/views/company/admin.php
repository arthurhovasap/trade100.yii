<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Компании'=>array('index'),
	'Управлять',
);

$this->menu=array(
	array('label'=>'Создать Компанию', 'url'=>array('create')),
);
?>

<h1>Список Компаний</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'company-grid',
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
