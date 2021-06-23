<?php
/* @var $this PermisoController */
/* @var $model Permiso */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPermiso'); ?>
		<?php echo $form->textField($model,'idPermiso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inicioPermiso'); ?>
		<?php echo $form->textField($model,'inicioPermiso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terminoPermiso'); ?>
		<?php echo $form->textField($model,'terminoPermiso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaSolicitud'); ?>
		<?php echo $form->textField($model,'fechaSolicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaResolucion'); ?>
		<?php echo $form->textField($model,'fechaResolucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadoPermiso'); ?>
		<?php echo $form->textField($model,'estadoPermiso',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Empleado_idEmpleado'); ?>
		<?php echo $form->textField($model,'Empleado_idEmpleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TipoPermisos_idTipoPermisos'); ?>
		<?php echo $form->textField($model,'TipoPermisos_idTipoPermisos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->