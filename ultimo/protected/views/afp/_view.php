<?php
/* @var $this AfpController */
/* @var $data Afp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAFP')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAFP), array('view', 'id'=>$data->idAFP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcent')); ?>:</b>
	<?php echo CHtml::encode($data->porcent); ?>
	<br />


</div>