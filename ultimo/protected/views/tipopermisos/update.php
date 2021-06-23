<?php
/* @var $this TipopermisosController */
/* @var $model Tipopermisos */

$this->breadcrumbs=array(
	'Tipopermisoses'=>array('index'),
	$model->idTipoPermisos=>array('view','id'=>$model->idTipoPermisos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipopermisos', 'url'=>array('index')),
	array('label'=>'Create Tipopermisos', 'url'=>array('create')),
	array('label'=>'View Tipopermisos', 'url'=>array('view', 'id'=>$model->idTipoPermisos)),
	array('label'=>'Manage Tipopermisos', 'url'=>array('admin')),
);
?>

<h1>Update Tipopermisos <?php echo $model->idTipoPermisos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>