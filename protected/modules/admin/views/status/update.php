<?php
/* @var $this StatusController */
/* @var $model Status */

$this->breadcrumbs=array(
	'Статусы'=>array('admin'),
	'Статус'=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Создать Статус', 'url'=>array('create')),
	array('label'=>'Посмотреть статус', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Список статусов', 'url'=>array('admin')),
);
?>

<h1>Обновить Статус  #<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>