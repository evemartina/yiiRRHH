<?php
/* @var $this AreatrabajoController */
/* @var $model Areatrabajo */

$this->breadcrumbs=array(
	'Areatrabajos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Areatrabajo', 'url'=>array('index')),
	array('label'=>'Manage Areatrabajo', 'url'=>array('admin')),
);
?>

<h1>Create Areatrabajo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); 