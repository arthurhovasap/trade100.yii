<?php
/* @var $this RoleController */
/* @var $model Role */

$this->breadcrumbs=array(
	'Роли'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Список ролей', 'url'=>array('admin')),
);
?>

<h1>Создать роль</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>