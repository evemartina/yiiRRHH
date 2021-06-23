<?php
/* @var $this SaludController */
/* @var $data Salud */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSalud')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSalud), array('view', 'id'=>$data->idSalud)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcent')); ?>:</b>
	<?php echo CHtml::encode($data->porcent); ?>
	<br />


</div>