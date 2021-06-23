<?php
/* @var $this TurnosController */
/* @var $model Turnos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idTurnos'); ?>
		<?php echo $form->textField($model,'idTurnos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horaEntrada'); ?>
		<?php echo $form->textField($model,'horaEntrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horaSalida'); ?>
		<?php echo $form->textField($model,'horaSalida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreTurno'); ?>
		<?php echo $form->textField($model,'nombreTurno',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->