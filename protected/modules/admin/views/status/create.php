<?php
/* @var $this StatusController */
/* @var $model Status */

$this->breadcrumbs=array(
	'Статусы'=>array('admin'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список статусов', 'url'=>array('admin')),
);
?>

<h1>Создать Статус</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>