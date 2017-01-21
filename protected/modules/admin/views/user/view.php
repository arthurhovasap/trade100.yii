<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Пользователи'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Создать пользователя', 'url'=>array('create')),
	array('label'=>'Обновить пользователя', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить пользователя', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Список пользователей', 'url'=>array('admin')),
);
?>

<h1>Просмотр пользователя #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'firstname',
		'lastname',
		array(
                    'label' => $model->getAttributeLabel('role_id'),
                    'type' => 'raw',
                    'value' => $model->role_id ? $model->role->name : "",
                ),
		array(
                    'label' => $model->getAttributeLabel('company_id'),
                    'type' => 'raw',
                    'value' => $model->company_id ? $model->company->name : "",
                ),
		array(
                    'label' => $model->getAttributeLabel('post_id'),
                    'type' => 'raw',
                    'value' => $model->post_id ? $model->post->name : "",
                ),
		'tel_home',
		'tel_work',
		'email_home',
		'email_work',
		array(
                    'label' => $model->getAttributeLabel('status_id'),
                    'type' => 'raw',
                    'value' => $model->status_id ? $model->status->name : "",
                ),
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
		'by_user_id',
	),
)); ?>
