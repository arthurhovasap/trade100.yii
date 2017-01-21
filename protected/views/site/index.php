<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Велком <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<h2>Ссылки</h2>
<ol>
    <li>GIT: https://github.com/arthurhovasap/trade100.yii</li>
    <li>Demo: http://tradeyii.isystems.am/</li>
    <li>ZIP: http://tradeyii.isystems.am/trade100.dev.zip</li>
</ol>
<h2>Краткая Карта файлов</h2>
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

<h2><i>Примичение *</i></h2>
<dl>
    <dt>Данные авторизации</dt>
        <dd>Логин: admin</dd>
        <dd>Пароль: admin777</dd>
</dl>