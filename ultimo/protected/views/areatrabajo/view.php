<?php
/* @var $this AreatrabajoController */
/* @var $model Areatrabajo */

$this->breadcrumbs=array(
	'Areatrabajos'=>array('index'),
	$model->idAreaTrabajo,
);

$this->menu=array(
	array('label'=>'List Areatrabajo', 'url'=>array('index')),
	array('label'=>'Create Areatrabajo', 'url'=>array('create')),
	array('label'=>'Update Areatrabajo', 'url'=>array('update', 'id'=>$model->idAreaTrabajo)),
	array('label'=>'Delete Areatrabajo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAreaTrabajo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Areatrabajo', 'url'=>array('admin')),
);
?>

<h1>View Areatrabajo <?php echo $model->idAreaTrabajo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAreaTrabajo',
		'nombre',
	),
)); ?>
