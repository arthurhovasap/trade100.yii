<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Компании'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список Компаний', 'url'=>array('admin')),
);
?>

<h1>Создать Компанию</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>