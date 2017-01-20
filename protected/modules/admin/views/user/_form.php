<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

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
		<?php echo $form->textField($model,'role_id'); ?>
		<?php echo $form->error($model,'role_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_id'); ?>
		<?php echo $form->textField($model,'company_id'); ?>
		<?php echo $form->error($model,'company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_id'); ?>
		<?php echo $form->textField($model,'post_id'); ?>
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
		<?php echo $form->textField($model,'status_id'); ?>
		<?php echo $form->error($model,'status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_dt'); ?>
		<?php echo $form->textField($model,'created_dt'); ?>
		<?php echo $form->error($model,'created_dt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_dt'); ?>
		<?php echo $form->textField($model,'updated_dt'); ?>
		<?php echo $form->error($model,'updated_dt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'by_user_id'); ?>
		<?php echo $form->textField($model,'by_user_id'); ?>
		<?php echo $form->error($model,'by_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->