<?php
/* @var $this VacacionesController */
/* @var $model Vacaciones */

$this->breadcrumbs=array(
	'Vacaciones'=>array('index'),
	$model->idVacaciones,
);

$this->menu=array(
	array('label'=>'List Vacaciones', 'url'=>array('index')),
	array('label'=>'Create Vacaciones', 'url'=>array('create')),
	array('label'=>'Update Vacaciones', 'url'=>array('update', 'id'=>$model->idVacaciones)),
	array('label'=>'Delete Vacaciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idVacaciones),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vacaciones', 'url'=>array('admin')),
);
?>

<h1>View Vacaciones #<?php echo $model->idVacaciones; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idVacaciones',
		'inicioVaca',
		'terminoVaca',
		'Empleado_idEmpleado',
	),
)); ?>
