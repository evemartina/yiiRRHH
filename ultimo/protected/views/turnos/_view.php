<?php
/* @var $this TurnosController */
/* @var $data Turnos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTurnos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTurnos), array('view', 'id'=>$data->idTurnos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaEntrada')); ?>:</b>
	<?php echo CHtml::encode($data->horaEntrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaSalida')); ?>:</b>
	<?php echo CHtml::encode($data->horaSalida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreTurno')); ?>:</b>
	<?php echo CHtml::encode($data->nombreTurno); ?>
	<br />


</div>