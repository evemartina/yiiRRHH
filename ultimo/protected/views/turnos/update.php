<?php
/* @var $this TurnosController */
/* @var $model Turnos */

$this->breadcrumbs=array(
	'Turnoses'=>array('index'),
	$model->idTurnos=>array('view','id'=>$model->idTurnos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Turnos', 'url'=>array('index')),
	array('label'=>'Create Turnos', 'url'=>array('create')),
	array('label'=>'View Turnos', 'url'=>array('view', 'id'=>$model->idTurnos)),
	array('label'=>'Manage Turnos', 'url'=>array('admin')),
);
?>

<h1>Update Turnos <?php echo $model->idTurnos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>