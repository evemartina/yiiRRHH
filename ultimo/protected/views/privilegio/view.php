<?php
/* @var $this PrivilegioController */
/* @var $model Privilegio */

$this->breadcrumbs=array(
	'Privilegios'=>array('index'),
	$model->idPrivilegio,
);

$this->menu=array(
	array('label'=>'List Privilegio', 'url'=>array('index')),
	array('label'=>'Create Privilegio', 'url'=>array('create')),
	array('label'=>'Update Privilegio', 'url'=>array('update', 'id'=>$model->idPrivilegio)),
	array('label'=>'Delete Privilegio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPrivilegio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Privilegio', 'url'=>array('admin')),
);
?>

<h1>View Privilegio #<?php echo $model->idPrivilegio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPrivilegio',
		'nombre',
		'acceso',
	),
)); ?>
