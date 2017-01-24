<?php
/* @var $this SubscribeController */
/* @var $model Subscribe */

$this->breadcrumbs=array(
	'Подписчики'=>array('admin'),
	'Управлять',
);
?>

<h1>Список подписчиков</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'subscribe-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'ip',
		'email',
		array( 
                    'name' => 'status_id',
                    'type' => 'raw',
                    'value' => '$data->status_id==null ? "" : "{$data->status->name}"',
                    'filter' => CHtml::listData($model->subscribeStatuses(), 'id', 'name'),
                ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
