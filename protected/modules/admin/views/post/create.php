<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Должности'=>array('admin'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список должностей', 'url'=>array('admin')),
);
?>

<h1>Создать должность</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>