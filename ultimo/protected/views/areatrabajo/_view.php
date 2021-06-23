<?php
/* @var $this AreatrabajoController */
/* @var $data Areatrabajo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAreaTrabajo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAreaTrabajo), array('view', 'id'=>$data->idAreaTrabajo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>