<?php
/* @var $this SaludController */
/* @var $model Salud */

$this->breadcrumbs=array(
	'Saluds'=>array('index'),
	$model->idSalud,
);

$this->menu=array(
	array('label'=>'List Salud', 'url'=>array('index')),
	array('label'=>'Create Salud', 'url'=>array('create')),
	array('label'=>'Update Salud', 'url'=>array('update', 'id'=>$model->idSalud)),
	array('label'=>'Delete Salud', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSalud),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salud', 'url'=>array('admin')),
);
?>

<h1>View Salud #<?php echo $model->idSalud; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSalud',
		'nombre',
		'porcent',
	),
)); ?>
