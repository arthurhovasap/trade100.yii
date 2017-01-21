<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Пользователи'=>array('admin'),
	'Список',
);

$this->menu=array(
	array('label'=>'Создать пользователя', 'url'=>array('create')),
);

?>

<h1>Список пользователей</h1>

<p>Вы можете дополнительно ввести оператор сравнения (<, <=,>,> =, <> или =) в начале каждого из значений поиска, чтобы указать, как сравнение должно быть сделано.</p>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'firstname',
		'lastname',
		array( 
                    'name' => 'role_id',
                    'type' => 'raw',
                    'value' => '$data->role_id==null ? "" : "{$data->role->name}"',
                    'filter' => CHtml::listData($model->userRoles(), 'id', 'name'),
                ),
		array( 
                    'name' => 'company_id',
                    'type' => 'raw',
                    'value' => '$data->company_id==null ? "" : "{$data->company->name}"',
                    'filter' => CHtml::listData($model->userCompanies(), 'id', 'name'),
                ),
		array( 
                    'name' => 'post_id',
                    'type' => 'raw',
                    'value' => '$data->post_id==null ? "" : "{$data->post->name}"',
                    'filter' => CHtml::listData($model->userPosts(), 'id', 'name'),
                ),
            
                array( 
                    'name' => 'status_id',
                    'type' => 'raw',
                    'value' => '$data->status_id==null ? "" : "{$data->status->name}"',
                    'filter' => CHtml::listData($model->userStatuses(), 'id', 'name'),
                ),
		/*
		'tel_home',
		'tel_work',
		'email_home',
		'email_work',
		'created_dt',
		'updated_dt',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
