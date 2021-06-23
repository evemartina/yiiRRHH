<?php
/* @var $this VacacionesController */
/* @var $model Vacaciones */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idVacaciones'); ?>
		<?php echo $form->textField($model,'idVacaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inicioVaca'); ?>
		<?php echo $form->textField($model,'inicioVaca'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terminoVaca'); ?>
		<?php echo $form->textField($model,'terminoVaca'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Empleado_idEmpleado'); ?>
		<?php echo $form->textField($model,'Empleado_idEmpleado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->