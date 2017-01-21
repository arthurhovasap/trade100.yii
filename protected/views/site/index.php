<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Велком <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

Краткая Карта файлов
<ul>
    <li>/protected/config/* - конфиги сайта</li>
    <li>/protected/helper/* - вспомогательные классы</li>
    <li>/protected/models/* - Модели сайта</li>
    <li>/protected/controllers/* - Контроллеры сайта</li>
    <li>/protected/views/* - Вю сайта</li>
    <li>/protected/views/layouts/* - Шаблоны бю</li>
    <li>/protected/views/partials/* - Блоки Вю</li>
    <li>/protected/modules/* - Модули сайта</li>
    <li>/protected/modules/admin - Админ модуль</li>
</ul>
