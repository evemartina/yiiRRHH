<?php
/* @var $this TipopermisosController */
/* @var $data Tipopermisos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipoPermisos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTipoPermisos), array('view', 'id'=>$data->idTipoPermisos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoPermiso')); ?>:</b>
	<?php echo CHtml::encode($data->tipoPermiso); ?>
	<br />


</div>