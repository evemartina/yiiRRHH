<?php
/* @var $this PermisoController */
/* @var $data Permiso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPermiso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPermiso), array('view', 'id'=>$data->idPermiso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicioPermiso')); ?>:</b>
	<?php echo CHtml::encode($data->inicioPermiso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terminoPermiso')); ?>:</b>
	<?php echo CHtml::encode($data->terminoPermiso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaSolicitud')); ?>:</b>
	<?php echo CHtml::encode($data->fechaSolicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaResolucion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaResolucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoPermiso')); ?>:</b>
	<?php echo CHtml::encode($data->estadoPermiso); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Empleado_idEmpleado')); ?>:</b>
	<?php echo CHtml::encode($data->Empleado_idEmpleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TipoPermisos_idTipoPermisos')); ?>:</b>
	<?php echo CHtml::encode($data->TipoPermisos_idTipoPermisos); ?>
	<br />

	*/ ?>

</div>