<?php
/* @var $this SubscribeController */
/* @var $model Subscribe */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subscribe-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
    
        <div class="row">
                <?php echo $form->labelEx($model,'status_id'); ?>
                <?php echo $form->dropDownList($model, 'status_id', CHtml::listData($model->subscribeStatuses(),'id','name'), array('options' => array($model->status_id=>array('selected'=>true)))); ?>
                <?php echo $form->error($model,'status_id'); ?>
        </div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Подписаться' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->