<?php
/* @var $this RoleController */
/* @var $model Role */

$this->breadcrumbs=array(
	'Роли'=>array('admin'),
	'Роль'=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Создать роль', 'url'=>array('create')),
	array('label'=>'Просмотр роля', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Список ролей', 'url'=>array('admin')),
);
?>

<h1>Обновить роль <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>