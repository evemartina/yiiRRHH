<?php
/* @var $this TurnosController */
/* @var $model Turnos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'turnos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'horaEntrada'); ?>
		<?php echo $form->textField($model,'horaEntrada'); ?>
		<?php echo $form->error($model,'horaEntrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horaSalida'); ?>
		<?php echo $form->textField($model,'horaSalida'); ?>
		<?php echo $form->error($model,'horaSalida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreTurno'); ?>
		<?php echo $form->textField($model,'nombreTurno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombreTurno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->