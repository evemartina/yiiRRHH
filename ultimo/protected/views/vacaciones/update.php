<?php
/* @var $this VacacionesController */
/* @var $model Vacaciones */

$this->breadcrumbs=array(
	'Vacaciones'=>array('index'),
	$model->idVacaciones=>array('view','id'=>$model->idVacaciones),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vacaciones', 'url'=>array('index')),
	array('label'=>'Create Vacaciones', 'url'=>array('create')),
	array('label'=>'View Vacaciones', 'url'=>array('view', 'id'=>$model->idVacaciones)),
	array('label'=>'Manage Vacaciones', 'url'=>array('admin')),
);
?>

<h1>Update Vacaciones <?php echo $model->idVacaciones; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>