<?php
/* @var $this LiquidacionController */
/* @var $model Liquidacion */

$this->breadcrumbs=array(
	'Liquidacions'=>array('index'),
	$model->fechaLiquidacion,
);

$this->menu=array(
	array('label'=>'List Liquidacion', 'url'=>array('index')),
	array('label'=>'Create Liquidacion', 'url'=>array('create')),
	array('label'=>'Update Liquidacion', 'url'=>array('update', 'id'=>$model->fechaLiquidacion)),
	array('label'=>'Delete Liquidacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->fechaLiquidacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Liquidacion', 'url'=>array('admin')),
);
?>

<h1>View Liquidacion #<?php echo $model->fechaLiquidacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fechaLiquidacion',
		'sueldoBase',
		'horasTrabajadas',
		'diasTrabajados',
		'antesImp',
		'seguroCesantia',
		'despuesImp',
		'liquido',
		'aPagar',
		'estadoLiquidacion',
		'AFP_idAFP',
		'Salud_idSalud',
		'Empleado_idEmpleado',
	),
)); ?>
