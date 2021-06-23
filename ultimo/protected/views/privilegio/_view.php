<?php
/* @var $this PrivilegioController */
/* @var $data Privilegio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPrivilegio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPrivilegio), array('view', 'id'=>$data->idPrivilegio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acceso')); ?>:</b>
	<?php echo CHtml::encode($data->acceso); ?>
	<br />


</div>