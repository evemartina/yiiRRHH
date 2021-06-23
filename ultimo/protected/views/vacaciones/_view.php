<?php
/* @var $this VacacionesController */
/* @var $data Vacaciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idVacaciones')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idVacaciones), array('view', 'id'=>$data->idVacaciones)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicioVaca')); ?>:</b>
	<?php echo CHtml::encode($data->inicioVaca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terminoVaca')); ?>:</b>
	<?php echo CHtml::encode($data->terminoVaca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Empleado_idEmpleado')); ?>:</b>
	<?php echo CHtml::encode($data->Empleado_idEmpleado); ?>
	<br />


</div>