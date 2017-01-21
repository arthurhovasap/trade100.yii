<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
echo app::secondsDT();
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
                <?php echo $form->labelEx($model,'role_id'); ?>
                <?php echo $form->dropDownList($model, 'role_id', CHtml::listData($model->userRoles(),'id','name'), array('options' => array($model->role_id=>array('selected'=>true)))); ?>
                <?php echo $form->error($model,'role_id'); ?>
        </div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_id'); ?>
		<?php echo $form->dropDownList($model, 'company_id', CHtml::listData($model->userCompanies(),'id','name'), array('options' => array($model->company_id=>array('selected'=>true)))); ?>
		<?php echo $form->error($model,'company_id'); ?>
	</div>

	<div class="row">
                <?php echo $form->labelEx($model,'post_id'); ?>
                <?php echo $form->dropDownList($model, 'post_id', CHtml::listData($model->userPosts(),'id','name'), array('options' => array($model->post_id=>array('selected'=>true)))); ?>
                <?php echo $form->error($model,'post_id'); ?>
        </div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_home'); ?>
		<?php echo $form->textField($model,'tel_home',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tel_home'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_work'); ?>
		<?php echo $form->textField($model,'tel_work',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tel_work'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_home'); ?>
		<?php echo $form->textField($model,'email_home',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email_home'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_work'); ?>
		<?php echo $form->textField($model,'email_work',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email_work'); ?>
	</div>

	<div class="row">
                <?php echo $form->labelEx($model,'status_id'); ?>
                <?php echo $form->dropDownList($model, 'status_id', CHtml::listData($model->userStatuses(),'id','name'), array('options' => array($model->status_id=>array('selected'=>true)))); ?>
                <?php echo $form->error($model,'status_id'); ?>
        </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->