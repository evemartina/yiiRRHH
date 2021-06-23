<?php
/* @var $this AsistenciaController */
/* @var $model Asistencia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asistencia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idAsistencia'); ?>
		<?php echo $form->textField($model,'idAsistencia'); ?>
		<?php echo $form->error($model,'idAsistencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'registroEntrada'); ?>
		<?php echo $form->textField($model,'registroEntrada'); ?>
		<?php echo $form->error($model,'registroEntrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'registroSalida'); ?>
		<?php echo $form->textField($model,'registroSalida'); ?>
		<?php echo $form->error($model,'registroSalida'); ?>
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