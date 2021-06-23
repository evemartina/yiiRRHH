<?php
/* @var $this TurnosController */
/* @var $model Turnos */

$this->breadcrumbs=array(
	'Turnoses'=>array('index'),
	$model->idTurnos,
);

$this->menu=array(
	array('label'=>'List Turnos', 'url'=>array('index')),
	array('label'=>'Create Turnos', 'url'=>array('create')),
	array('label'=>'Update Turnos', 'url'=>array('update', 'id'=>$model->idTurnos)),
	array('label'=>'Delete Turnos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTurnos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Turnos', 'url'=>array('admin')),
);
?>

<h1>View Turnos #<?php echo $model->idTurnos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTurnos',
		'horaEntrada',
		'horaSalida',
		'nombreTurno',
	),
)); ?>
