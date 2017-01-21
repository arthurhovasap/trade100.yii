<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Пользователи'=>array('admin'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список пользователей', 'url'=>array('admin')),
);
?>

<h1>Создать пользователей</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>