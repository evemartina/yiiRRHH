<?php
/* @var $this VacacionesController */
/* @var $model Vacaciones */

$this->breadcrumbs=array(
	'Vacaciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vacaciones', 'url'=>array('index')),
	array('label'=>'Manage Vacaciones', 'url'=>array('admin')),
);
?>

<h1>Create Vacaciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>