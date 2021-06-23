<?php
/* @var $this PermisoController */
/* @var $model Permiso */

$this->breadcrumbs=array(
	'Permisos'=>array('index'),
	$model->idPermiso,
);

$this->menu=array(
	array('label'=>'List Permiso', 'url'=>array('index')),
	array('label'=>'Create Permiso', 'url'=>array('create')),
	array('label'=>'Update Permiso', 'url'=>array('update', 'id'=>$model->idPermiso)),
	array('label'=>'Delete Permiso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPermiso),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Permiso', 'url'=>array('admin')),
);
?>

<h1>View Permiso #<?php echo $model->idPermiso; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPermiso',
		'inicioPermiso',
		'terminoPermiso',
		'descripcion',
		'fechaSolicitud',
		'fechaResolucion',
		'estadoPermiso',
		'Empleado_idEmpleado',
		'TipoPermisos_idTipoPermisos',
	),
)); ?>
