<?php
/* @var $this SubscribeController */
/* @var $model Subscribe */

$this->breadcrumbs=array(
	'Subscribes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Обновить подпищхика', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить подписчика', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Список подпищхиков', 'url'=>array('admin')),
);
?>

<h1>View Subscribe #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ip',
                'email',
		array(
                    'label' => $model->getAttributeLabel('created_dt'),
                    'type' => 'raw',
                    'value' => app::date("Y-m-d H:i:s",$model->created_dt),
                ),
		array(
                    'label' => $model->getAttributeLabel('updated_dt'),
                    'type' => 'raw',
                    'value' => app::date("Y-m-d H:i:s",$model->updated_dt),
                ),
		array(
                    'label' => $model->getAttributeLabel('status_id'),
                    'type' => 'raw',
                    'value' => $model->status_id ? $model->status->name : "",
                ),
	),
)); ?>
