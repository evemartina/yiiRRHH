<?php
/* @var $this VacacionesController */
/* @var $model Vacaciones */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vacaciones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'inicioVaca'); ?>
		<?php echo $form->textField($model,'inicioVaca'); ?>
		<?php echo $form->error($model,'inicioVaca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terminoVaca'); ?>
		<?php echo $form->textField($model,'terminoVaca'); ?>
		<?php echo $form->error($model,'terminoVaca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Empleado_idEmpleado'); ?>
		<?php echo $form->textField($model,'Empleado_idEmpleado'); ?>
		<?php echo $form->error($model,'Empleado_idEmpleado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->