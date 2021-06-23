<?php
/* @var $this PermisoController */
/* @var $model Permiso */

$this->breadcrumbs=array(
	'Permisos'=>array('index'),
	$model->idPermiso=>array('view','id'=>$model->idPermiso),
	'Update',
);

$this->menu=array(
	array('label'=>'List Permiso', 'url'=>array('index')),
	array('label'=>'Create Permiso', 'url'=>array('create')),
	array('label'=>'View Permiso', 'url'=>array('view', 'id'=>$model->idPermiso)),
	array('label'=>'Manage Permiso', 'url'=>array('admin')),
);
?>

<h1>Update Permiso <?php echo $model->idPermiso; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>