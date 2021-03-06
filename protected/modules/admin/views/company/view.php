<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Компании'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Создать Компанию', 'url'=>array('create')),
	array('label'=>'Обновить Компанию', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Компанию', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Список Компаний', 'url'=>array('admin')),
);
?>

<h1>Просмотр компании #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
