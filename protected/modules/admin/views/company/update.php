<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Компании'=>array('index'),
	'Компания'=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Создать Компанию', 'url'=>array('create')),
	array('label'=>'Просмотр Компании', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Список Компаний', 'url'=>array('admin')),
);
?>

<h1>Обновить <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>