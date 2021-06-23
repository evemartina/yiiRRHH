<?php
/* @var $this TipopermisosController */
/* @var $model Tipopermisos */

$this->breadcrumbs=array(
	'Tipopermisoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tipopermisos', 'url'=>array('index')),
	array('label'=>'Manage Tipopermisos', 'url'=>array('admin')),
);
?>

<h1>Create Tipopermisos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>