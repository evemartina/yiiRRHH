<?php
/* @var $this SaludController */
/* @var $model Salud */

$this->breadcrumbs=array(
	'Saluds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Salud', 'url'=>array('index')),
	array('label'=>'Manage Salud', 'url'=>array('admin')),
);
?>

<h1>Create Salud</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>