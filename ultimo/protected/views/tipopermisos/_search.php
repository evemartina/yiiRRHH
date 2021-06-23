<?php
/* @var $this TipopermisosController */
/* @var $model Tipopermisos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idTipoPermisos'); ?>
		<?php echo $form->textField($model,'idTipoPermisos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoPermiso'); ?>
		<?php echo $form->textField($model,'tipoPermiso',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->