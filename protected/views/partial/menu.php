<?php $this->widget('zii.widgets.CMenu',array(
        'items'=>array(
                array('label'=>'Домой', 'url'=>array('/site/index')),
                array('label'=>'Статус', 'url'=>array('/admin/status/admin')),
                array('label'=>'Роль', 'url'=>array('/admin/role/admin')),
                array('label'=>'Должность', 'url'=>array('/admin/post/admin')),
                array('label'=>'Компания', 'url'=>array('/admin/company/admin')),
                array('label'=>'Пользователи', 'url'=>array('/admin/user/admin')),
                array('label'=>'Подписчики', 'url'=>array('/admin/subscribe/admin')),
                array('label'=>'Логин', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Логаут ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
        ),
)); ?>