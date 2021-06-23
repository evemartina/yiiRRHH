<?php
/* @var $this TipopermisosController */
/* @var $model Tipopermisos */

$this->breadcrumbs=array(
	'Tipopermisoses'=>array('index'),
	$model->idTipoPermisos,
);

$this->menu=array(
	array('label'=>'List Tipopermisos', 'url'=>array('index')),
	array('label'=>'Create Tipopermisos', 'url'=>array('create')),
	array('label'=>'Update Tipopermisos', 'url'=>array('update', 'id'=>$model->idTipoPermisos)),
	array('label'=>'Delete Tipopermisos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipoPermisos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipopermisos', 'url'=>array('admin')),
);
?>

<h1>View Tipopermisos #<?php echo $model->idTipoPermisos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipoPermisos',
		'tipoPermiso',
	),
)); ?>
