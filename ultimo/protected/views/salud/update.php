<?php
/* @var $this SaludController */
/* @var $model Salud */

$this->breadcrumbs=array(
	'Saluds'=>array('index'),
	$model->idSalud=>array('view','id'=>$model->idSalud),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salud', 'url'=>array('index')),
	array('label'=>'Create Salud', 'url'=>array('create')),
	array('label'=>'View Salud', 'url'=>array('view', 'id'=>$model->idSalud)),
	array('label'=>'Manage Salud', 'url'=>array('admin')),
);
?>

<h1>Update Salud <?php echo $model->idSalud; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>