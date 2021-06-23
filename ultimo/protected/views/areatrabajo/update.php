<?php
/* @var $this AreatrabajoController */
/* @var $model Areatrabajo */

$this->breadcrumbs=array(
	'Areatrabajos'=>array('index'),
	$model->idAreaTrabajo=>array('view','id'=>$model->idAreaTrabajo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Areatrabajo', 'url'=>array('index')),
	array('label'=>'Create Areatrabajo', 'url'=>array('create')),
	array('label'=>'View Areatrabajo', 'url'=>array('view', 'id'=>$model->idAreaTrabajo)),
	array('label'=>'Manage Areatrabajo', 'url'=>array('admin')),
);
?>

<h1>Update Areatrabajo <?php echo $model->idAreaTrabajo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'datos'=>$datos,)); 